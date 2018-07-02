{{-- Part of fruit project. --}}

@extends('_global.html')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-{{ $color }} text-light mt-5">
                <h1>
                    Hello Banana in Blade in {{ $location }} ,
                    Foo = {{ $foo }}
                </h1>
            </div>
        </div>
    </div>
@stop
