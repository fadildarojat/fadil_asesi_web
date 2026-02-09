<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
      protected $table = 'pelanggans';

    protected $fillable = [
        'no_pelanggan',
        'nama_pelanggan',
        'alamat'
    ];
}
