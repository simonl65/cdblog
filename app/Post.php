<?php

namespace App;

class Post extends Model
{
    // Allow $post->comments;
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

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
