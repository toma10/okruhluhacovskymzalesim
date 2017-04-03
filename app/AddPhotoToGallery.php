<?php

namespace App;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddPhotoToGallery
{
    /**
     * The UploadedFile instance.
     *
     * @var UploadedFile
     */
    protected $file;

    /**
     * The Gallery instance.
     *
     * @var Gallery
     */
    protected $gallery;

    /**
     * The Thhumbnail instance.
     *
     * @var Thumbnail
     */
    protected $thumbnail;

    /**
     * Create a new instance.
     *
     * @param UploadedFile $file
     * @param Gallery      $gallery
     */
    public function __construct(UploadedFile $file, Gallery $gallery, Thumbnail $thumbnail = null)
    {
        $this->file = $file;
        $this->gallery = $gallery;
        $this->thumbnail = $thumbnail ?: new Thumbnail;
    }

    /**
     * Process the form.
     *
     * @return void
     */
    public function save()
    {
        $photo = $this->gallery->addPhoto($this->makePhoto());

        $this->file->move($photo->baseDir(), $photo->name);

        $this->thumbnail->make($photo->path, $photo->thumbnail_path);
    }

    /**
     * Make a new photo instance.
     *
     * @return Photo
     */
    public function makePhoto()
    {
        return Photo::fromName($this->makeFileName());
    }

    /**
     * Make a file name.
     *
     * @return string
     */
    protected function makeFileName()
    {
        $name = sha1(
            time() . $this->file->getClientOriginalName()
        );

        $extension = $this->file->getClientOriginalExtension();

        return "{$name}.{$extension}";
    }
}
