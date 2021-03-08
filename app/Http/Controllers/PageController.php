<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Must;
use App\Serie;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $musts = Must::all();
        $series = Serie::all();
        return view('guests.comics.index', compact('comics', 'musts', 'series'));
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
        return view('guests.comics.show', compact('comic'));
    }
}
