{{-- Part of fruit project. --}}
@extends('_global.html')


@section('content')
    <div class="container mt-3">
        <form action="{{ $router->route('banana') }}" method="post">
            <div class="form-group">
                <label for="input-title">Title</label>
                <input type="text" id="input-title" class="form-control" name="title"
                    placeholder="請輸入名稱" value="{{ $bananas->title }}"/>
            </div>

            <div class="form-group">
                <label for="input-desc">Description</label>
                <textarea id="input-desc" class="form-control" rows="7" name="desc"
                    placeholder="請輸入描述">{{ $bananas->desc }}</textarea>
            </div>

            <input type="hidden" name="id" id="" value="{{ $bananas->id }}" />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
