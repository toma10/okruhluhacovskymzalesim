<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $galleries = Gallery::latest()->with('photos')->get();

        return view('galleries.index', compact('galleries'));
    }

    public function show(Gallery $gallery)
    {
        $photos = $gallery->photos()->paginate(60);

        return view('galleries.show', compact('gallery', 'photos'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'year' => 'required|integer',
        ]);

        $gallery = Gallery::forYear(request('year'));

        return redirect()->route('galleries.show', $gallery);
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return back();
    }
}
