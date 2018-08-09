<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable =[
    	'name', 'web','file','direction'
    ];

    public function peoples(){
    	return $this->hasMany(People::class);
    }
}
