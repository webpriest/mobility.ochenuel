<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScFlyer extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'filename', 'description'];

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }

    public function photo()
    {
        return $this->filename ? asset('storage/'.$this->filename) : null;
    }
}
