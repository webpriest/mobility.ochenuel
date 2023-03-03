<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExternalPublication extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'photo', 'filename', 'published'];

    protected $casts = [
        'read_at' => 'datetime'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function booted()
    {
        static::creating(function($external){
            $external->slug = Str::slug($external->title);
        });

        static::updating(function($external){
            $external->slug = Str::slug($external->title);
        });
    }
}
