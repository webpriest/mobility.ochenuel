<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = ['sc_event_id', 'title', 'firstname', 'middlename', 'lastname', 'email', 'phone', 'address', 'city', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function sc_event()
    {
        return $this->belongsTo(ScEvent::class);
    }
}
