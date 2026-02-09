<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
      protected $table = 'penjualans';

    protected $fillable = [
        'faktur_id',
        'no_pelanggan',
        'tanggal_penjualan'
    ];

    public function pelanggan()
    {
        return
        $this -> belongsTo(pelanggan::class);
    }
    public function barang()
    {
       return
        $this -> belongsToMany(barang::class) ->withPivot('aty', 'harga');
    }
}
