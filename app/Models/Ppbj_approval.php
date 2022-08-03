<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppbj_approval extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function ppbj()
    {
        return $this->belongsTo('App\Models\Ppbj');
    }
}
