{{-- Part of fruit project. --}}

@extends('_global.html')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-{{ $color }} text-light mt-5">
                <h1>HHello Banana in Blade in {{ $location }} ,
                    Foo = {{ $foo }}
                </h1>
            </div>
            <div class="col-lg-12">
                <img src="https://images-na.ssl-images-amazon.com/images/I/71gI-IUNUkL._SX522_.jpg" alt="">
            </div>
        </div>
    </div>

@stop
