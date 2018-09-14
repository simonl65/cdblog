<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);

        $response->assertSee("This is blogging good!");

        // $response->assertSee("This is blogging BAD!");
    }
}
