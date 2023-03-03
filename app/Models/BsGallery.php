<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BsGallery extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'bike_share_id', 'description'];

    public function photo()
    {
        return $this->photo ? asset('storage/'.$this->photo) : null;
    }

    public function bike_share()
    {
        return $this->belongsTo(BikeShare::class);
    }
}
