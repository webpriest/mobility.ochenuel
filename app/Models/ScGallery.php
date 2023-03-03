<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScGallery extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'sc_event_id', 'description', 'featured'];

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }
}
