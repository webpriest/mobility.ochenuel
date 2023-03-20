<?php
namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScEvent extends Model
{
    use HasFactory;

    protected $fillable = ['token', 'theme', 'sub_theme', 'badge', 'address', 'city', 'country_id', 'event_date', 'days', 'event_time'];

    protected $casts = [
        'event_date' => 'date',
        'event_time' => 'datetime'
    ];

    public function getRouteKeyName()
    {
        return 'token';
    }

    public function badge()
    {
        return $this->badge ? asset('storage/'.$this->badge) : null;
    }

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

    public function sc_reports()
    {
        return $this->hasMany(ScReport::class);
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

    // Set date range
    public function date_range()
    {
        if($this) {
            $this->first_day = $this->event_date->format('jS');
            $this->last_day = $this->event_date->addDays($this->days - 1);
            return $this->first_day.' - '.$this->last_day->format('jS F, Y');
        }
    }
}
