<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LinkTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_view_the_homepage()
    {
        $this->get('/')
            ->assertSee(config('app.name'));
    }

    /** @test */
    public function user_can_create_a_link()
    {
        $link = factory('App\Link')->create();

        $this->post('/link', $link->toArray());

        $this->assertDatabaseHas('links', $link->toArray());
    }

    /** @test */
    public function user_can_view_shortened_url()
    {
        // $this->withoutExceptionHandling();
        $link = factory('App\Link')->create();

        $this->post('/link', $link->toArray());

        $this->get($link->path())
            ->assertRedirect($link->url);
    }

    /** @test */
    public function abort_if_the_url_is_wrong()
    {
        $this->get('/randomurl')
            ->assertStatus(404);
    }

}