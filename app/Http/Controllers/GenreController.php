<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        return view('pages.genre.index',[
            'genres' => $genres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.genre.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'genre' => 'required'
        ]);

        $data = array(
            'kode' => strtoupper($request->genre),
            'genre' => $request->genre
        );
        Genre::create($data);
        return redirect()->route('genre.index')->with(['success' => 'Data Berhasil di simpan']);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findOrfail($id);

        return view('pages.genre.edit', [
            'items' => $genre
        ]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'genre' => 'required'
        ]);

        $data = array(
            'kode' => strtoupper($request->genre),
            'genre' => $request->genre
        );

        $items = Genre::findOrfail($id);
        $items->update($data);
        return redirect()->route('genre.index')->with(['success' => 'Data Berhasil di perbarui']);
    }


    public function destroy($id)
    {
        $items = Genre::findOrfail($id);
        $items->delete();

        return redirect()->route('genre.index')->with(['success' => 'Data Berhasil di Hapus']);

    }
}
