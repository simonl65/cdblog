<?php

namespace App;

class Comment extends Model
{
    // Allows $comment->post;
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
