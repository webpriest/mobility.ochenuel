<?php

namespace App\Http\Livewire\Main\Sumcourse\Lecturedoc;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Lectures extends Component
{
    use WithFileUploads;

    public $lecture_id, $filename, $filetype, $filesize, $available;
    public $sumcourse, $pdf, $docs, $lecture;

    protected $listeners = ['file.uploaded' => 'fileUploaded'];

    protected $rules = [
        'lecture_id' => ['required'],
        'pdf' => ['required', 'file'],
    ];

    public function messages()
    {
        return [
            'lecture_id.required' => 'Select a lecture',
            'pdf.required' => 'Choose a file for upload',
            'pdf.file' => 'The upload must be a file',
        ];
    }

    public function mount()
    {
        $this->docs = $this->lecture->lecture_docs;
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
        return view('livewire.main.sumcourse.lecturedoc.lecture-docs');
    }
}
