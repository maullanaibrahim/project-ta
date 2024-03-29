<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ppbj()
    {
        return $this->hasOne('App\Models\Ppbj');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}

