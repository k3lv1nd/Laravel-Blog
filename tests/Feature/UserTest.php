<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBlog()
    {
       $post = new Post();
       $post1= $post::find(1);
       dd($post1);
        $this->assertEquals('kelvin', $post1->author);
    }


}
