<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id'];
    public function ppbj_detail()
    {
        return $this->belongsToMany('App\Models\Ppbj_detail');
    }
}
