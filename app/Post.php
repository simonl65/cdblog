<?php

namespace App;

class Post extends Model
{
    // Allow $post->comments;
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
