<?php

namespace App\Http\Livewire\Main\Sumcourse;

use Livewire\Component;
use App\Models\ScFlyer;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Flyer extends Component
{
    use WithFileUploads;
    
    public $sumcourse, $flyer, $pdf, $description, $flyerId;

    protected $listeners = [
        'pdfUploaded' => '$refresh'
    ];

    protected $rules = [
        'description' => ['required'],
        'pdf' => ['required', 'file']
    ];

    public function messages()
    {
        return [
            'description.required' => 'Give the flyer a caption',
            'pdf.required' => 'Upload a PDF file'
        ];
    }

    public function mount()
    {
        $this->flyer = $this->sumcourse->sc_flyer;
    }

    public function pdf()
    {
        return $this->pdf ? asset('storage/img/pdf-upload-bg.webp') : asset('storage/img/image-upload-bg.webp');
    }

    public function store()
    {
        $this->validate();

        $sumcourse = $this->sumcourse;
       if($this->pdf) {
            $gallery = $sumcourse->sc_flyer()->create([
                'filename' => $this->pdf->store('images/sumcourse/flyer', 'public'),
                'description' => $this->description
            ]);
        }
        else {
            $gallery = $sumcourse->sc_flyer()->create([
                'description' => $this->description
            ]);
        }

        session()->flash('success', 'Flyer uploaded');
        $this->reset();

        return redirect()->route('manager.sumcourse.flyer.index', $sumcourse);
    }

    public function loadModal($id)
    {
        $this->flyerId = $id;
        $this->dispatchBrowserEvent('openDeleteModal');
    }

    public function delete()
    {
        $flyer = ScFlyer::find($this->flyerId);
        
        if(Storage::disk('public')->exists($flyer->filename)) {
            unlink("storage/".$flyer->filename);
        }

        $flyer->delete();

        session()->flash('success', 'File deleted');
        return redirect()->route('manager.sumcourse.flyer.index', $flyer->sc_event);
    }

    public function cancel()
    {
        $this->dispatchBrowserEvent('closeModal');
    }
    
    public function render()
    {
        return view('livewire.main.sumcourse.flyer');
    }
}
