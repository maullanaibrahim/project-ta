<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function ppbj()
    {
        return $this->hasMany('App\Models\Ppbj');
    }

    public function ppbj_approval()
    {
        return $this->hasMany('App\Models\Ppbj_approval');
    }
}
