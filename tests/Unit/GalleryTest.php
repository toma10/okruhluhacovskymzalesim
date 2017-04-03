<?php

namespace Tests\Unit;

use App\Photo;
use App\Gallery;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GalleryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function it_creates_a_gallery_for_given_year()
    {
        $gallery = Gallery::forYear(2016);

        $this->assertEquals(2016, $gallery->year);
    }

    /** @test */
    function it_contains_photos()
    {
        $gallery = factory(Gallery::class)->create();

        $this->assertInstanceOf(Collection::class, $gallery->photos);
    }

    /** @test */
    function it_can_associate_photos_with_a_gallery()
    {
        $gallery = factory(Gallery::class)->create();
        $photo = factory(Photo::class)->make(['gallery_id' => null]);

        $gallery->addPhoto($photo);

        $this->assertCount(1, $gallery->photos);
    }
}
