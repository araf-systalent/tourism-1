<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;


class PostsTest extends TestCase
{

    use DatabaseMigrations;
    /** @test */
    public function a_user_can_browse_post()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
