<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
 	protected $fillable =[
 		'name','slug',
 	];   

 	public function peoples(){
 		return $this->belongsToMany(People::class);
 	}
}
