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
        <div class="comics">
            <img src="img/batman.jpg" alt="">
            <h4 class="title">BATMAN</h4>
            <p class="availability">AVAIABLE NOW</p>
        </div>
        <div class="comics">
            <img src="img/crime.jpg" alt="">
            <h4 class="title">BATMAN</h4>
            <p class="availability">AVAIABLE NOW</p>
        </div>
        <div class="comics">
            <img src="img/infinite.jpg" alt="">
            <h4 class="title">BATMAN</h4>
            <p class="availability">AVAIABLE NOW</p>
        </div>
        <div class="comics">
            <img src="img/manbat.jpg" alt="">
            <h4 class="title">BATMAN</h4>
            <p class="availability">AVAIABLE NOW</p>
        </div>
        <div class="comics">
            <img src="img/wonderw.jpg" alt="">
            <h4 class="title">BATMAN</h4>
            <p class="availability">AVAIABLE NOW</p>
        </div>
    </div>
    <!-- must reads -->
    <div class="container py-5 must_reads_container">
            <h1 class="text-uppercase">must reads</h1>
        <div class="must_reads">
            <div class="must_reads_comics">
                <img src="img/connect.jpg" alt="">
                <h4 class="subtitle text-uppercase">Lorem ipsum dolor sit amet consectetur</h4>
                <h3 class="title text-uppercase">Lorem ipsum dolor</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Natus sapiente voluptatem ipsam vel, accusantium fugit.</p>
            </div>
            <div class="must_reads_comics">
                <img src="img/sandman.jpg" alt="">
                <h4 class="subtitle text-uppercase">Lorem ipsum dolor sit amet consectetur</h4>
                <h3 class="title text-uppercase">Lorem ipsum dolor</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Natus sapiente voluptatem ipsam vel, accusantium fugit.</p>
            </div>
            <div class="must_reads_comics">
                <img src="img/wonder.jpg" alt="">
                <h4 class="subtitle text-uppercase">Lorem ipsum dolor sit amet consectetur</h4>
                <h3 class="title text-uppercase">Lorem ipsum dolor</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Natus sapiente voluptatem ipsam vel, accusantium fugit.</p>
            </div>
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
                <div class="current_comics">
                    <img src="img/vampire.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/batbot.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/batbb.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/batrac.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/batcat.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/batwhitek.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
            </div>
            <div class="current_row d-flex">
                <div class="current_comics">
                    <img src="img/futuredec.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/futuregreen.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/futurecat.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/futureacqua.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/futureharley.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
                <div class="current_comics">
                    <img src="img/futurebat.jpg" alt="">
                    <h2 class="title">BATMAN</h2>
                </div>
            </div>
        </div>
            @endsection