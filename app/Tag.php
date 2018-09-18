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


    /**
     * Override default return value (usually 'id').
     * We want /posts/tags/<tag_name>
     */
    public function getRouteKeyName()
    {
        return 'name';
    }
}
