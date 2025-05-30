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
        return view('gallery');
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
        $galery = new galery();
        $galery->image = $request->image;
        $galery->url = $request->url;
        $galery->save();
        return redirect()->index();
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
