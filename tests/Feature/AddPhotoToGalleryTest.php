<?php

namespace Tests\Feature;

use App\Gallery;
use Mockery as m;
use App\Thumbnail;
use Tests\TestCase;
use App\AddPhotoToGallery;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddPhotoToGalleryTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function it_processes_a_form_to_add_a_photo_to_a_gallery()
    {
        $file = m::mock(UploadedFile::class, [
            'getClientOriginalName' => 'foo',
            'getClientOriginalExtension' => 'jpg',
        ]);

        $file->shouldReceive('move')
            ->once()
            ->with('images/photos', 'nowfoo.jpg');

        $thumbnail = m::mock(Thumbnail::class);

        $thumbnail->shouldReceive('make')
            ->once()
            ->with('images/photos/nowfoo.jpg', 'images/photos/tn-nowfoo.jpg');

        $gallery = factory(Gallery::class)->create();

        (new AddPhotoToGallery($file, $gallery, $thumbnail))->save();

        $this->assertCount(1, $gallery->photos);
    }
}

namespace App;

function time() {
    return 'now';
}

function sha1($path) {
    return $path;
}
