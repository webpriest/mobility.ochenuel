<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureDoc extends Model
{
    use HasFactory;

    protected $fillable = ['lecture_id', 'filename', 'filetype', 'filesize', 'available'];

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }
}
