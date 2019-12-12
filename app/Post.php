<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Post extends Model
{
    use softDeletes;
    public $directory = '/images/';
    protected $dates = ['deleted_at'];

    protected $fillable = ['title','content'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function photos()
    {
       return $this->morphMany(Photo::class,'imageable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::Class,'taggable');
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }
}
