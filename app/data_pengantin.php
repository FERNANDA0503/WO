<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_pengantin extends Model
{
    protected $table = 'data_pengantin';
    protected $fillable = [
        'nama',
        'alamat',
        'Email',
        'nohp',
        'tanggal',

    ];
    public $timestamps = false;

}
