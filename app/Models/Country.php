<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country'];

    public function sc_events()
    {
        return $this->hasMany(ScEvent::class);
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class);
    }

    public function registration()
    {
        return $this->hasMany(Registration::class);
    }
}
