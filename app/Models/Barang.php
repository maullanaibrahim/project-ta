<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['id', 'kode_barang', 'nama_barang', 'satuan', 'harga', 'jenis_barang', 'kategori', 'lead_time', 'created_at', 'update_at'];

    public function ppbj_detail()
    {
        return $this->belongsToMany('App\Models\Ppbj_detail');
    }
}
