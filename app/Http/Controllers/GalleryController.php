<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Http\Requests\StoregaleryRequest;
use App\Http\Requests\UpdategaleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $gallery = gallery::all();
        return view('gallery', [
            'gallery' => $gallery
        ]);

    }
    //     $photos = ::all();

    //     return view('gallery', [
    //         'photos' => $photos
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Reqyuest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery = new gallery();
        // $request -> file('ImagesUpload'){
        //     //$imageName = time(). '.' . $request->image->extension();
        //     $request->image->move(public_path('/ImagesUpload'), $imageName);
        //     $gallery->image = $imageName;
        // }
        // $gallery->image = ;
        $gallery->url = $request->input('url');
        $gallery->save();
        return massage('Image uploaded')->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategalleryRequest $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
