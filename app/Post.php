<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Post extends Model
{
	use Sluggable;

    protected $fillable = ["link"];
    protected $with = ['author','keywords'];

    public function sluggable() {
        return [ 'source' => 'body' ];
    }

    public function author(){
    	return $this->belongsTo(Author::class);
    }

    public function scopeQuotes(){
    	return $this->where('isQuote',1);
    }

    public function media(){
        return $this->hasMany(Media::class);
    }
    public function getLinkAttribute()
    {
        return url("/quote/".$this->slug);
    }

    public function scopeDisableRelationships($query){
        return $query->setEagerLoads([]);
    }

    public function scopeDisplayMainQuotes($query,$page=15){   
        return $this->quotes()->where(\DB::raw(' length(body)'),'<=',200)->paginate($page);
    }

    public function keywords()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
