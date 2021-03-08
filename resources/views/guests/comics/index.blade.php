@extends('layouts.app')

@section('content')
    <div class="current_container">
        <div class="label_comics text-uppercase">
            <h1>Comics & Graphic novels</h1>
        </div>
    </div>
    <!-- comics container -->
    <div class="comics_container">
        <ul class="nav justify-content-center text-uppercase ">
            <li class="nav-item">
                <a class="nav-link" href="#">This week</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Last week</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Next week</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Upcoming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">See all</a>
            </li>
        </ul>
        @foreach($comics as $comic)
             <div class="comics text-uppercase">
               <a href="{{route('comics', $comic->id )}}">
                 <img src="storage/{{$comic->img}}" alt="">
               </a>
               <h4>{{$comic->title}}</h4>
               <p>{{$comic->avaiability?'available now':'not available'}}</p>
             </div>
      @endforeach
    </div>
    <!-- must reads -->
    <div class="container py-5 must_reads_container">
            <h1 class="text-uppercase">must reads</h1>
        <div class="must_reads">
        @foreach($musts as $must)
             <div class="must_reads_comics">
                <img src="storage/{{$must->img}}" alt="">
                <h4 class="serie text-uppercase">{{$must->serie}}</h4>
                <h3 class="title text-uppercase">{{$must->name}}</h3>
                <p class="subtitle">{{$must->subtitle}}</p>
            </div>
      @endforeach
        </div>
    </div>
    <!-- current series -->
    <div class="current_container">
        <div class="label_comics text-uppercase">
            <h1>current series</h1>
        </div>
    </div>
        <div class="current_series">
            <div class="current_row d-flex">
                @foreach($series as $serie)
               <div class="current_comics">
                    <img src="storage/{{$serie->img}}" alt="">
                    <h2 class="title">{{$serie->name}}</h2>
                </div>
                @endforeach
            </div>
        </div>
            @endsection