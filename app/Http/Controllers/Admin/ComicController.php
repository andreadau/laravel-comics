<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Writer;
use App\Artist;
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
        $artists = Artist::all();
        $writers = Writer::all();
        return view('admin.comics.create', compact('writers', 'artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'nullable | image | max:500',
            'price' => 'required',
            'series' => 'required',
            'volume' => 'required',
            'page' => 'required',
            'rated' => 'required',
            'artists' => 'exists:artists,id',
            'writers' => 'exists:writers,id'
            ]);

        $img = Storage::disk('public')->put('posts_img', $request->img);
        $cover = Storage::disk('public')->put('posts_img', $request->cover);
        $newComic = new Comic;
        $newComic->title = $request->title;
        $newComic->img = $img;
        $newComic->cover = $cover;
        $newComic->price = $request->price;
        $newComic->avaiability = $request->avaiability === 'on'?true:false ;
        $newComic->description = $request->description;
        $newComic->series = $request->series;
        $newComic->volume = $request->volume;
        $newComic->page = $request->page;
        $newComic->rated = $request->rated;
        $newComic->writers()->attach($request->writers);
        $newComic->artists()->attach($request->artists);
        $newComic->save();
        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($comic)
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
        $writers = Writer::all();
        $artists = Artist::all();
        return view('admin.comics.edit',compact('comic', 'writers', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$comic)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'nullable | image | max:500',
            'price' => 'required',
            'series' => 'required',
            'volume' => 'required',
            'page' => 'required',
            'rated' => 'required',
            'artists' => 'exists:artists,id',
            'writers' => 'exists:writers,id'
            ]);

        $comic = Comic::find($comic);
        Storage::delete('posts_img', $comic->img);
        Storage::delete('posts_img', $comic->cover);
        $img = Storage::disk('public')->put('posts_img', $request->img);
        $cover = Storage::disk('public')->put('posts_img', $request->cover);
        $comic->title = $request->title;
        $comic->img = $img;
        $comic->cover = $cover;
        $comic->price = $request->price;
        $comic->avaiability = $request->avaiability === 'on'?true:false ;
        $comic->description = $request->description;
        $comic->series = $request->series;
        $comic->volume = $request->volume;
        $comic->page = $request->page;
        $comic->rated = $request->rated;
        $comic->writers()->sync($request->writers);
        $comic->artists()->sync($request->artists);
        $comic->update();
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($comic)
    {
        $comic = Comic::find($comic);
        $comic->delete();
        return redirect()->route('admin.comics.index');

    }
}
