<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppbj_detail extends Model
{
    protected $fillable = ['id', 'ppbj_id', 'kode_barang', 'qty', 'satuan', 'harga', 'jumlah', 'keterangan', 'jenis_barang'];

    public function ppbj()
    {
        return $this->belongsTo('App\Models\Ppbj');
    }

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang');
    }
}
