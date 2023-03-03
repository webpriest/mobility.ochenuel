<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsGallery extends Model
{
    use HasFactory;

    protected $fillable = ['news_post_id', 'photo', 'description', 'available'];

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function news_post()
    {
        return $this->belongsTo(NewsPost::class);
    }
}
