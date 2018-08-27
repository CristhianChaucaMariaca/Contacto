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
    	return $this->beLongsTo(Company::class);
    }
    public function contacts(){
    	return $this->hasMany(Contact::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function scopeName($query,$name)
    {
        if($name)
            return $query->where('name','LIKE',"%$name%");
    }
    public function scopeLast_name($query,$last_name)
    {
        if($last_name)
            return $query->where('last_name','LIKE',"%$last_name%");
    }
}
