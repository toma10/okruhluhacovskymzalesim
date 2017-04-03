<?php

namespace Tests\Unit;

use App\Photo;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PhotoTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function it_creates_photo_from_given_paths()
    {
        $photo = Photo::fromName('foo.jpg');

        $this->assertEquals('foo.jpg', $photo->name);
    }

    /** @test */
    function it_sets_photo_s_paths_when_setting_photo_s_name()
    {
        $photo = factory(Photo::class)->make();

        $photo->name = 'foo.jpg';

        $this->assertEquals('foo.jpg', $photo->name);
        $this->assertEquals('images/photos/foo.jpg', $photo->path);
        $this->assertEquals('images/photos/tn-foo.jpg', $photo->thumbnail_path);

    }
}
