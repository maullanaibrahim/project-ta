<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppbj_approval extends Model
{
    protected $fillable = ['id', 'tgl1', 'user_id1', 'alasan1', 'status1', 'tgl2', 'user_id2', 'alasan2', 'status2', 'tgl3', 'user_id3', 'alasan3', 'status3', 'tgl4', 'user_id4', 'alasan4', 'status4'];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function ppbj()
    {
        return $this->hasMany('App\Models\Ppbj');
    }
}
