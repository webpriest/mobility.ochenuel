<?php

namespace App\Http\Livewire\Main\Sumcourse\Report;

use App\Models\ScEvent;
use Livewire\Component;
use App\Models\ScReport;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ScReports extends Component
{
    use WithFileUploads;

    public $sc_event_id, $title, $filename, $filetype, $filesize, $available;
    public $reports, $sumcourses, $pdf, $reportId;

    protected $listeners = ['file.uploaded' => 'fileUploaded'];

    protected $rules = [
        'sc_event_id' => ['required'],
        'title' => ['required'],
        'pdf' => ['required', 'file'],
    ];

    public function messages()
    {
        return [
            'sc_event_id.required' => 'Select a theme/title',
            'title.required' => 'Enter a description',
            'pdf.required' => 'Choose a file for upload',
            'pdf.file' => 'The upload must be a file',
        ];
    }

    public function mount()
    {
        $this->reports = ScReport::latest()->get();
        $this->sumcourses = ScEvent::latest()
                            ->select('id', 'theme', 'token')
                            ->take(5)
                            ->get();
    }

    public function fileUploaded()
    {
        $this->reports = ScReport::latest()->get();
        $this->sumcourses = ScEvent::latest()
                            ->select('id', 'theme', 'token')
                            ->take(5)
                            ->get();
    }

    public function updatedPdf()
    {
        $this->myPdf();
    }

    public function myPdf()
    {
        return asset('storage/img/pdf-attached.webp');
    }

    public function photo()
    {
        return $this->filename ? asset('storage/img/pdf-attached.webp') : asset('storage/img/pdf-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $report = new ScReport;
        $report->sc_event_id = $this->sc_event_id;
        $report->title = $this->title;

        if($this->pdf) {
            $report->filename = $this->pdf->store('sumcourse/reports', 'public');
            $report->filesize = Storage::disk('public')->size($report->filename);
            $report->filetype = Storage::disk('public')->mimeType($report->filename);
        }

        $report->save();

        session()->flash('success', 'File uploaded');
        return redirect()->route('manager.sumcourse.report.index');
    }

    public function loadModal($id)
    {
        $this->reportId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $report = ScReport::find($this->reportId);
        
        if(Storage::disk('public')->exists($report->filename)) {
            unlink("storage/".$report->filename);
        }

        $report->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.sumcourse.report.index');
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }

    public function render()
    {
        return view('livewire.main.sumcourse.report.sc-reports');
    }
}
