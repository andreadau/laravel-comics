@extends('layouts.app')

@section('content')
    <div class="hero_img_comic">
        <div class="blue_band">
        </div>
        <img src="" alt="">
    </div>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="price_container">
                <h1 class="text-uppercase"></h1>
                <div class="comics_price">
                    <span>U.S Price : {{ $comic->price }}</span>
                    <span>{{$comic->avaiability?'AVAILABLE NOW':'NOT AVAILABLE'}}</span>
                    <span>Check Avaiability</span>
                </div>
                <p>{{ $comic->description }}</p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
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