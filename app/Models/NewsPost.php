<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'sub_title', 'content', 'photo', 'author', 'news_date', 'published'];

    protected $casts = [
        'news_date' => 'date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function news_galleries()
    {
        return $this->hasMany(NewsGallery::class);
    }

    public static function booted()
    {
        static::creating(function($post){
            $post->slug = Str::slug($post->title);
        });

        static::updating(function($post){
            $post->slug = Str::slug($post->title);
        });
    }
}
