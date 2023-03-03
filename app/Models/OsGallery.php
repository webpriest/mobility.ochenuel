<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsGallery extends Model
{
    use HasFactory;

    protected $fillable = ['open_street_event_id', 'photo', 'description'];

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function open_street_event()
    {
        return $this->belongsTo(OpenStreetEvent::class);
    }
}
