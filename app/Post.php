<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Post extends Model
{
	use Sluggable;

    protected $fillable = ["link"];
    protected $with = ['author'];

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
}
