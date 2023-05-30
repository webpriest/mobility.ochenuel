<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsReport extends Model
{
    use HasFactory;
    
    protected $fillable = ['open_street_event_id', 'cover_image', 'filename', 'filetype', 'filesize', 'available'];

    public function open_street_event()
    {
        return $this->belongsTo(OpenStreetEvent::class);
    }

    public function pdf()
    {
        return $this->filename ? asset('storage/'.$this->filename) : null;
    }
}
