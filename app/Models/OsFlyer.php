<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OsFlyer extends Model
{
    use HasFactory;

    protected $fillable = ['open_street_id', 'filename', 'description'];

    public function getRouteKeyName()
    {
        return 'token';
    }

    public function open_street_event()
    {
        return $this->belongsTo(OpenStreetEvent::class);
    }

    public function photo()
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
