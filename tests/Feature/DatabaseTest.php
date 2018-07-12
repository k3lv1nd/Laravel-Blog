<?php

namespace Tests\Feature;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        $user = factory(Post::class,3)->make();

        // Use model in tests...
    }
}
