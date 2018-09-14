<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Post;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /**
         * Given I have two records in the database that are posts,
         * and each one is posted a month apart:
         */
        // Create post now:
        $first  = factory(Post::class)->create();
        // Create post 1 month old:
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        /**
         * When I fetch the archives:
         */
        $archives  = Post::archives();

        /**
         * Then the response should be in the proper format:
         */
        // Must have two posts.
        $this->assertCount(2, $archives);

        // Must be an array of two arrays with the set format:
        $this->assertEquals([
            [
                "year"  => $first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
                "published" => 1
            ],
            [
                "year"  => $second->created_at->format('Y'),
                "month" => $second->created_at->format('F'),
                "published" => 1
            ],
        ], $archives);
    }
}
