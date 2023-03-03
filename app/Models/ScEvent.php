<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScEvent extends Model
{
    use HasFactory;

    protected $fillable = ['token', 'theme', 'sub_theme', 'badge', 'address', 'city', 'country_id', 'event_date', 'days', 'period'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function sc_galleries()
    {
        return $this->hasMany(ScGallery::class);
    }

    public function registration()
    {
        return $this->hasMany(Registration::class);
    }

    public function sc_flyer()
    {
        return $this->hasOne(ScFlyer::class);
    }

    public static function booted()
    {
        static::creating(function($event){
            $event->token = Str::random();
        });
    }
}
