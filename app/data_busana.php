<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_busana extends Model
{
    protected $table = 'data_busana';
    protected $fillable = [
        'paket_busana',
        'keterangan',

    ];
    public $timestamps = false;

}
