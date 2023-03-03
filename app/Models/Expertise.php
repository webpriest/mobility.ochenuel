<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'photo', 'content', 'icon', 'available'];

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
        static::creating(function($expertise){
            $expertise->slug = Str::slug($expertise->title);
        });
        
        static::updating(function($expertise){
            $expertise->slug = Str::slug($expertise->title);
        });
    }
}
