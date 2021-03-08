@extends('layouts.app')

@section('content')
    <div class="hero_img_comic"  style="background-image: url(../storage/{{$comic->cover }});">
        <div class="container">
            <img src="../storage/{{$comic->img}}" alt="">
        </div>
    </div>
    <div class="blue_band">
    </div>

    <div class="container py-5">
        <div class="row clearfix">
            <div class="col-md-7">
                <div class="price_container">
                    <h1 class="text-uppercase">{{ $comic->title }}</h1>
                    <div class="comics_price">
                        <div class="price_c">
                            <span>U.S Price : ${{ $comic->price }}</span>
                            <span class="span_price">{{$comic->avaiability?'AVAILABLE':'NOT AVAILABLE'}}</span>
                        </div>
                        <div class="avaiability_check">
                            <span>Check Avaiability</span>
                        </div>
                    </div>
                    <p>{{ $comic->description }}</p>
                </div>
            </div>
        </div>
        <div class="row clearfix py-5">
            <div class="col-md-6">
                <table class="table">
                    <h2>Talent</h2>
                    <tbody>
                        <tr>
                            <th>Art by:</th>
                            <td>M.J Jorey</td>
                        </tr>
                        <tr>
                            <th>Written by:</th>
                            <td>Any Chu</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <h2>Specs</h2>
                    <tbody>
                        <tr>
                            <th>Series:</th>
                            <td>{{ $comic->series }}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{ $comic->price }}</td>
                        </tr>
                        <tr>
                            <th>Volume:</th>
                            <td>{{ $comic->volume }}</td>
                        </tr>
                        <tr>
                            <th>Page:</th>
                            <td>{{ $comic->page }}</td>
                        </tr>
                        <tr>
                            <th>Rated:</th>
                            <td>{{ $comic->rated }}</td>
                        </tr>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
