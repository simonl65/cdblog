<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Get post associated with a tag:
     *
     * Any tag may be applied to many posts
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
