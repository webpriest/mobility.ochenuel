<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'photo', 'published'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function publication_files()
    {
        return $this->hasMany(PublicationFile::class);
    }

    public static function booted()
    {
        static::creating(function($publication){
            $publication->slug = Str::slug($publication->title);
        });

        static::updating(function($publication){
            $publication->slug = Str::slug($publication->title);
        });
    }
}
