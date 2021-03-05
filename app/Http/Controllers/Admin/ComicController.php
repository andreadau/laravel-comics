<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = Storage::disk('public')->put('posts_img', $request->img);
        $newComic = new Comic;
        $newComic->title = $request->title;
        $newComic->img = $img;
        $newComic->price = $request->price;
        $newComic->avaiability = $request->avaiability === 'on'?true:false ;
        $newComic->description = $request->description;
        $newComic->series = $request->series;
        $newComic->volume = $request->volume;
        $newComic->page = $request->page;
        $newComic->rated = $request->rated;
        $newComic->save();
        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show( $comic)
    {
        $comic = Comic::find($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($comic)
    {
        $comic = Comic::find($comic);
        return view('admin.comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $comic)
    {
        $comic = Comic::find($comic);
        $comic->title = $request->title;
        $comic->img = 'img';
        $comic->price = $request->price;
        $comic->avaiability = $request->avaiability === 'on'?true:false ;
        $comic->description = $request->description;
        $comic->series = $request->series;
        $comic->volume = $request->volume;
        $comic->page = $request->page;
        $comic->rated = $request->rated;
        $comic->update();
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $comic)
    {
        $comic = Comic::find($comic);
        $comic->delete();
        return redirect()->route('admin.comics.index');

    }
}
