<?php

namespace App;

class Comment extends Model
{
    // Comments belong to a post:
    // Allows $comment->post; to get a comment's post_id
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Comments belong to a user:
    // Allows $comment->user->name; to get a comment's user's name
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
