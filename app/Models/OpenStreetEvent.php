<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpenStreetEvent extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'location', 'photo', 'os_date', 'os_time', 'hosted'];

    protected $casts = [
        'os_date' => 'date',
        'os_time' => 'datetime'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function os_galleries()
    {
        return $this->hasMany(OsGallery::class);
    }

    public function os_reports()
    {
        return $this->hasMany(OsReport::class);
    }

    public function os_flyers()
    {
        return $this->hasMany(OsFlyer::class);
    }

    public static function booted()
    {
        static::creating(function($ose){
            $ose->slug = Str::slug($ose->title);
        });
        
        static::updating(function($ose){
            $ose->slug = Str::slug($ose->title);
        });
    }
}
