{{-- Part of fruit project. --}}

@extends('_global.html')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bg-{{ $color }} text-light mt-5">
                <h1>
                    Hello Banana in Blade in {{ $location }} ,
                    Foo = {{ $foo }}
                </h1>
                <br />
                ID: {{ $id }} Date: {{ $date }}
            </div>
        </div>
    </div>
@stop
