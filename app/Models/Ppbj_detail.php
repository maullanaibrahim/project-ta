<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppbj_detail extends Model
{
    protected $guarded = ['id'];

    public function ppbj()
    {
        return $this->belongsTo('App\Models\Ppbj');
    }

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang');
    }
}
