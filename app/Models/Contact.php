<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject', 'message', 'read_at'];

    protected $casts = ['read_at' => 'timestamp'];

    public function scopeUnread(Builder $builder)
    {
        $builder->whereNull('read_at');
    }
}
