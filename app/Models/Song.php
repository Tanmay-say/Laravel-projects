<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Song extends Model
{
    use HasFactory;

    // Add fillable field corresponding to database columns .
    protected $fillable=['title', 'artist'];

    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }
}