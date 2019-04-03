<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;

class Thread extends Model
{
	use Sluggable;
	
    public function sluggable() {
        return [ 'source' => 'title' ];
    }

    public function getLinkAttribute(){
    	return url("/threads/".$this->slug);
    }    

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
