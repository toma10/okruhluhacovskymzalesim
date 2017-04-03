<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Gallery;
use App\AddPhotoToGallery;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Gallery $gallery, Request $request)
    {
        $photo = (new AddPhotoToGallery($request->file('photo'), $gallery))->save();

        return $photo;
    }

    public function destroy(Gallery $gallery, Photo $photo)
    {
        $photo->delete();

        return back();
    }
}
