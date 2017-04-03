<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateGalleryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function guests_may_not_create_gallery()
    {
        $this->post(route('galleries.store'))
            ->assertRedirect('/login');
    }

    /** @test */
    function authenticated_user_can_create_gallery()
    {
        $user = factory(User::class)->create();
        $this->be($user);

        $this->post(route('galleries.store'), [
            'year' => 2016,
        ]);

        $this->assertDatabaseHas('galleries', [
            'year' => 2016,
        ]);
    }

    /** @test */
    function it_requires_year()
    {
        $user = factory(User::class)->create();
        $this->be($user);

        $this->post(route('galleries.store'))
            ->assertSessionHasErrors('year');
    }
}
