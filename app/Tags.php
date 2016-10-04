<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name'];

    public function tagsIdPost()
    {
        return $this->belongsToMany('App\TagsPosts','posts_tags','post_id','tags_id');
    }
    
}
