<?php

namespace App\Http\Controllers;

use App\Models\galery;
use App\Http\Requests\StoregaleryRequest;
use App\Http\Requests\UpdategaleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $galery = galery::all();
        return view('gallery', [
            'galery' => $galery
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
        return view('galery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Reqyuest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $galery = new galery();
        // $request -> file('ImagesUpload'){
        //     //$imageName = time(). '.' . $request->image->extension();
        //     $request->image->move(public_path('/ImagesUpload'), $imageName);
        //     $galery->image = $imageName;
        // }
        // $galery->image = ;
        $galery->url = $request->input('url');
        $galery->save();
        return massage('Image uploaded')->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategaleryRequest $request, galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galery $galery)
    {
        //
    }
}
