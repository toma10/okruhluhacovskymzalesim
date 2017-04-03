<?php

namespace Tests\Feature;

use App\User;
use App\Photo;
use App\Gallery;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeleteGalleryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function guests_may_not_delete_gallery()
    {
        $gallery = factory(Gallery::class)->create();

        $this->delete(route('galleries.destroy', $gallery))
            ->assertRedirect('/login');
    }

    /** @test */
    function authenticated_user_can_delete_gallery()
    {
        $user = factory(User::class)->create();
        $this->be($user);

        $gallery = factory(Gallery::class)->create();

        $this->delete(route('galleries.destroy', $gallery));

        $this->assertDatabaseMissing('galleries', ['id' => $gallery->id]);
    }

    /** @test */
    function it_deletes_all_photos_associated_with_gallery()
    {
        $user = factory(User::class)->create();
        $this->be($user);

        $gallery = factory(Gallery::class)->create();
        $photosInGallery = factory(Photo::class, 3)->create(['gallery_id' => $gallery->id]);

        $gallery->delete();

        $photosInGallery->each(function($photo) {
            $this->assertDatabaseMissing('photos', ['id' => $photo->id]);
        });
    }
}
