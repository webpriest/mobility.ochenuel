<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = ['speaker_id', 'sc_event_id', 'topic', 'lecture_day', 'lecture_session'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function lecture_docs()
    {
        return $this->hasMany(LectureDoc::class);
    }

    public static function booted()
    {
        static::creating(function($lecture){
            $lecture->slug = Str::slug($lecture->topic);
        });
        
        static::updating(function($lecture){
            $lecture->slug = Str::slug($lecture->topic);
        });
    }
}
