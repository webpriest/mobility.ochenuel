<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpenStreet extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'sub_title', 'content', 'photo'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public static function booted()
    {
        static::creating(function($os){
            $os->slug = Str::slug($os->title);
        });
        
        static::updating(function($os){
            $os->slug = Str::slug($os->title);
        });
    }
}
