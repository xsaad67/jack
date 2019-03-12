<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Quote extends Model
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
}
