<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'url'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function logo()
    {
        return $this->logo ? asset('storage/'.$this->logo) : null;
    }

    public static function booted()
    {
        static::creating(function($partner){
            $partner->slug = Str::slug($partner->name);
        });
        
        static::updating(function($partner){
            $partner->slug = Str::slug($partner->name);
        });
    }
}
