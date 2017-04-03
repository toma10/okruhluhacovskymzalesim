<?php

namespace App;

use Image;

class Thumbnail
{
    public function make($source, $destination)
    {
        Image::make($source)
            ->fit(480, 360)
            ->save($destination, 60);
    }
}
