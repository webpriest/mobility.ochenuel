<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'token', 'event', 'sc_day', 'start_time', 'end_time', 'event_order', 'status'];

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }

    public static function booted()
    {
        static::creating(function($schedule){
            $schedule->token = Str::random();
        });
    }
}
