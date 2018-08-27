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

 	public function scopeTag($query, $name){
 		if($name)
 			return $query->where('name', 'LIKE', "%$name%");
 	}
}
