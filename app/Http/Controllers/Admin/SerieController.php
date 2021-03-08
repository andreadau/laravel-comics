<?php

namespace App\Http\Controllers\Admin;

use App\Serie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class serieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $series = Serie::all();
        return view('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'img' => 'nullable | image | max:500',
          ]);
        $img = Storage::disk('public')->put('posts_img', $request['img']);
        $newSerie = new Serie;
        $newSerie->name = $request['name'];
        $newSerie->img = $img;
        $newSerie->save();
        return redirect()->route('admin.series.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show($serie)
    {
        $serie = Serie::find($serie);
        return view('admin.series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit($serie)
    {
        $serie = Serie::find($serie);
        return view('admin.series.edit', compact('serie'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$serie)
    {
        $request = $request->validate([
            'name' => 'required',
            'img' => 'nullable | image | max:500',
          ]);
        $serie = Serie::find($serie);
        Storage::delete('posts_img', $request['img']);
        $img = Storage::disk('public')->put('posts_img', $request['img']);
        $serie->name = $request['name'];
        $serie->img = $img;
        $serie->update();
        return redirect()->route('admin.series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy($serie)
    {
        $serie= Serie::find($serie);
        $serie->delete();
        return redirect()->route('admin.series.index');
    }
}
