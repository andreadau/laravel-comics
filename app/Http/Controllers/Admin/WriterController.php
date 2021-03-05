<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $writers = Writer::all();
        return view('admin.writers.index', compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.writers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $writer = new Writer;
        $writer->name = $request->name;
        $writer->save();
        return redirect()->route('admin.writers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show($writer)
    {
        $writer = Writer::find($writer);

        return view('admin.writers.show', compact('writer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit( $writer)
    {
        $writer = Writer::find($writer);
        return view('admin.writers.edit', compact('writer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $writer)
    {
        $writer = Writer::find($writer);
        $writer->name = $request->name;
        $writer->update();
        return redirect()->route('admin.writers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy( $writer)
    {
        $writer= Writer::find($writer);
        $writer->delete();
        return redirect()->route('admin.writers.index');
    }
}
