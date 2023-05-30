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

    public function pdf()
    {
        return $this->filename ? asset('storage/'.$this->filename) : null;
    }

    public function size()
    {
        if($this->filesize >= 1000 && $this->filesize < 1000000) {
            return round($this->filesize/1000) . "KB";
        }
        elseif($this->filesize >= 1000000 && $this->filesize < 1000000000) {
            return round($this->filesize/1000000) . "MB";
        }
        else {
            return "Large file";
        }
    }
}
