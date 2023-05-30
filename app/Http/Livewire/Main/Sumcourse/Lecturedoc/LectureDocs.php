<?php

namespace App\Http\Livewire\Main\Sumcourse\Lecturedoc;

use Livewire\Component;
use App\Models\LectureDoc;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class LectureDocs extends Component
{
    use WithFileUploads;

    public $lecture_id, $filename, $filetype, $filesize, $available;
    public $lecture, $pdf, $docs, $docId;

    protected $rules = [
        'pdf' => ['required', 'file'],
    ];

    public function messages()
    {
        return [
            'pdf.required' => 'Choose a file for upload',
            'pdf.file' => 'The upload must be a file',
        ];
    }

    public function mount()
    {
        $this->lecture_id = $this->lecture->id;
        $this->docs = $this->lecture->lecture_docs;
    }
    
    public function fileUploaded()
    {
        $this->lecture_id = $this->lecture->id;
        $this->docs = $this->lecture->lecture_docs;
    }

    public function updatedPdf()
    {
        $this->myPdf();
    }

    public function myPdf()
    {
        return asset('storage/img/pdf-attached.webp');
    }

    public function upload()
    {
        $this->validate();

        $doc = new LectureDoc;
        $doc->lecture_id = $this->lecture_id;

        if($this->pdf) {
            $doc->filename = $this->pdf->store('sumcourse/lectures', 'public');
            $doc->filesize = Storage::disk('public')->size($doc->filename);
            $doc->filetype = Storage::disk('public')->mimeType($doc->filename);
        }

        $doc->save();

        session()->flash('success', 'File uploaded');
        return redirect()->route('manager.sumcourse.lecture.index');
    }

    public function loadModal($id)
    {
        $this->docId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $doc = LectureDoc::find($this->docId);
        
        if(Storage::disk('public')->exists($doc->filename)) {
            unlink("storage/".$doc->filename);
        }

        $doc->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.sumcourse.lecture.show', $doc);
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
