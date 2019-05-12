<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function quotes(){
    	return $this->hasMany(Post::class)->where("isQuote",1);
    }

    public function getNameAttribute(){
        return $this->attributes['name'] = ucwords($this->attributes['name']);
    }

    public static function filteredSort(){
    	
    }
}
