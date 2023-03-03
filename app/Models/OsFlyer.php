<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsFlyer extends Model
{
    use HasFactory;

    protected $fillable = ['open_street_id', 'filename', 'description'];

    public function open_street()
    {
        return $this->belongsTo(OpenStreet::class);
    }
}
