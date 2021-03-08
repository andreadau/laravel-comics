<?php

namespace App\Http\Controllers\Admin;

use App\Must;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class mustController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $musts = Must::all();
        return view('admin.musts.index', compact('musts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musts.create');
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
            'subtitle' => 'required',
            'serie' => 'required',
            'img' => 'required | max:500',
          ]);

        $img = Storage::disk('public')->put('posts_img', $request['img']);
        $newMust = new Must;
        $newMust->name = $request['name'];
        $newMust->subtitle = $request['subtitle'];
        $newMust->serie = $request['serie'];
        $newMust->img = $img;
        $newMust->save();
        return redirect()->route('admin.musts.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function show($must)
    {
        $must = Must::find($must);
        return view('admin.musts.show', compact('must'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function edit($must)
    {
        $must = Must::find($must);
        return view('admin.musts.edit', compact('must'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$must)
    {
        $request = $request->validate([
            'name' => 'required',
            'subtitle' => 'required',
            'serie' => 'required',
            'img' => 'nullable | image | max:500',
          ]);
        $must = Must::find($must);
        Storage::delete('posts_img', $request['img']);
        $img = Storage::disk('public')->put('posts_img', $request['img']);
        $must->name = $request['name'];
        $must->subtitle = $request['subtitle'];
        $must->serie = $request['serie'];
        $must->img = $img;
        $must->update();
        return redirect()->route('admin.musts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function destroy($must)
    {
        $must= Must::find($must);
        $must->delete();
        return redirect()->route('admin.musts.index');
    }
}
