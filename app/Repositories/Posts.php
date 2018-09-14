<?php
namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts
{
    protected $redis;

    /**
     * Constructor injects Redis:
     */
    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }


    /**
     * Return all posts:
     */
    public function all()
    {
        return Post::all();
    }
}
