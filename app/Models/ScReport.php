<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScReport extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'title', 'cover_image', 'filename', 'filetype', 'filesize', 'available'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo()
    {
        return $this->cover_image ? asset('storage/'.$this->cover_image) : null;
    }

    public function pdf()
    {
        return $this->filename ? asset('storage/'.$this->filename) : null;
    }

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }

    public static function booted()
    {
        static::creating(function($report){
            $report->slug = Str::slug($report->title);
        });
    }
}
