<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable=[
    	'user_id','company_id','name','last_name','file','cargo',
    ];

    public function user(){
    	return $this->beLongsTo(User::class);
    }
    public function company(){
    	return $this->beLongsTo(Peoples::class);
    }
}
