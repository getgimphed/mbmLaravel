<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jaf extends Model
{
    public function companyUser(){

    	return $this->belongsTo('App\companyUser');
    }
}
