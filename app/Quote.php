<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Quote extends Model
{
	use Sluggable;

    protected $fillable = ["link"];

    public function sluggable() {
        return [ 'source' => 'body' ];
    }
}
