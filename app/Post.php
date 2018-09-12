<?php

namespace App;

class Post extends Model
{
    // Posts can have many comments:
    // Allow $post->comments;
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Posts belong to users:
    // Allows $post->user;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Posts can have comments added to them:
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
        /**
         * ...becuase $this->comments returns a collection of all comments
         * associated with this post.
         *
         * The post_id is handled due to the post<->comments relationship set-up
         * in the comments() function (above).
         */
    }
}
