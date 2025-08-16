<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Http\Requests\StoregaleryRequest;
use App\Http\Requests\UpdategaleryRequest;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //     $photos = ::all();
    public function index(){
        $gallerys = gallery::all();

        return view('gallery', [
            'gallerys' => $gallerys
        ]);

    }

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
    public function upload(Request $request)
    {

        $gallery = new gallery();
       if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
        // $imagem = $request->file('imagem');

        // // Gera um nome único para o arquivo
        // $nameImage = uniqid() . '.' . $imagem->getClientOriginalExtension();

        // Salva na pasta 'public/imagens'
        $url = $request->file('imagem')->store( 'imagens','public' );
        $nameImage = $request->file('imagem')->getClientOriginalName();

        // Exemplo: salvar no banco (opcional)
        // Imagem::create(['caminho' => $caminho]);
        $gallery->url = $url;
        $gallery->image = $nameImage;
        $gallery->save();

        return back()->with('success', 'Imagem salva com sucesso!');
        }
        $gallery->url = $url;
        $gallery->image = $nameImage;
        $gallery->save();
        return  back()->withErrors(['imagem' => 'Erro ao fazer upload da imagem.']);
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
