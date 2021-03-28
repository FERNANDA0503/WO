<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'judul',
        'artikel',
        'gambar',
    ];
}
