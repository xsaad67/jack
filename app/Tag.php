<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function scopeTemplateTags(){
    	return $this->whereNotNull('source');
    }

    public function getNameAttribute(){
    	return $this->attributes['name'] = ucwords($this->attributes['name']);
    }

    public function quotes()
    {
    	return $this->morphedByMany(Post::class,'taggable')->where('isQuote',1);
    }
}
