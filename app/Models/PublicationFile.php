<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationFile extends Model
{
    use HasFactory;

    protected $fillable = ['publication_id', 'filename', 'filetype', 'filesize', 'available'];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }
}
