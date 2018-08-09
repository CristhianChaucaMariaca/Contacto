<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=[
    	'people_id','type_id','phone','extension','email',
    ];
    public function type(){
    	return $this->beLongsTo(Type::class);
    }
}
