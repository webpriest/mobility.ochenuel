<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'title', 'firstname', 'middlename', 'lastname', 'email', 'phone', 'address', 'city', 'organisation', 'country_id'];

    protected $appends = ['fullName'];

    public function getRouteKeyName()
    {
        return 'token';
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }

    public static function booted()
    {
        static::creating(function($register){
            $register->token = Str::random();
        });
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->middlename} {$this->lastname}";
    }
}
