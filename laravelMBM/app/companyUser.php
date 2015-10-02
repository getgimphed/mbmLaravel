<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyUser extends Model
{   
    protected $table = 'companyUsers';
    protected $fillable = ['compName',
    'compEmail',
    'hrMob',
    'password',
    
    'compUrl',
    'compAdd',
    'compCity',
    'hrName',
    'hrPhone'];

    public function jaf(){

        return $this->hasOne('App\jaf');
    }
}
