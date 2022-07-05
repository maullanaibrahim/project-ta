<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppbj extends Model
{
    protected $fillable = ['no_ppbj', 'id_pembuat', 'id_pemohon', 'id_approval', 'beban_biaya', 'alasan', 'tgl_kebutuhan', 'total_harga', 'progress', 'catatan'];

    public function ppbj_detail()
    {
        return $this->hasOne('App\Models\Ppbj_detail');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function karyawan()
    {
        return $this->belongsTo('App\Models\Karyawan');
    }

    public function ppbj_approval()
    {
        return $this->belongsTo('App\Models\Ppbj_approval');
    }
}
