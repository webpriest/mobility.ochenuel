<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BikeShare extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'photo', 'content'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function bs_galleries()
    {
        return $this->hasMany(BsGallery::class);
    }

    public static function booted()
    {
        static::creating(function($bike){
            $bike->slug = Str::slug($bike->title);
        });
        
        static::updating(function($bike){
            $bike->slug = Str::slug($bike->title);
        });
    }
}
