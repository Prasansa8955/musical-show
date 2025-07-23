<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainArtist extends Model
{
    protected $fillable = ['artist_name', 'email', 'contact_number', 'payment'];
}
