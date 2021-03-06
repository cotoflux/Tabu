<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Interest extends Model
{
    function User()
    {
        return $this->belongsToMany('App\User');
    }

    public static function getInterest()
    {
        return Self::all()->pluck('category', 'id');
    }

    public function create()
    {
        
    }
}
