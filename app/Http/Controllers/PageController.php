<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
    * Show the guest Homepage.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
       return view('guests.comics.index');
   }

       /**
    * Show the guest show.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function about()
   {
       return view('guests.comics.show');
   }
}
