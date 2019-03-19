<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Category extends Model
{
    use Sluggable;

    public function sluggable() {
        return [ 'source' => 'name' ];
    }
}
