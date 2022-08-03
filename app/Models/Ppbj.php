<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppbj extends Model
{
    protected $guarded = ['id'];

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
        return $this->hasOne('App\Models\Ppbj_approval');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang');
    }
}
