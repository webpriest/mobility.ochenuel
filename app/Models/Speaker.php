<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'country_id', 'role', 'avatar', 'bio'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function avatar()
    {
        return $this->avatar ? asset('storage/'.$this->avatar) : null;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public static function booted()
    {
        static::creating(function($speaker){
            $speaker->slug = Str::slug($speaker->name);
        });
        
        static::updating(function($speaker){
            $speaker->slug = Str::slug($speaker->name);
        });
    }
}
