<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable=[
    	'description',
    ];
    public function contacts(){
    	return $this->hasMany(Contact::class);
    }
}
