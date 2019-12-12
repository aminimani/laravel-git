<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->morphedByMany(post::class,'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class,'taggable');
    }
}
