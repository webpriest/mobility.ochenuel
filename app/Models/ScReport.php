<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScReport extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'title', 'filename', 'filetype', 'filesize', 'available'];

    public function pdf()
    {
        return $this->filename ? asset('storage/'.$this->filename) : null;
    }

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }
}
