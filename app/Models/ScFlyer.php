<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScFlyer extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'filename', 'description'];

    public function getRouteKeyName()
    {
        return 'token';
    }

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }

    public function photo()
    {
        return $this->filename ? asset('storage/img/pdf-upload-bg.webp') : null;
    }

    public function pdf()
    {
        return $this->filename ? asset('storage/'.$this->filename) : null;
    }

    public static function booted()
    {
        static::creating(function($flyer){
            $flyer->token = Str::random();
        });
    }
}
