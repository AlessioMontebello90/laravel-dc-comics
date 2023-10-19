@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>Edit new comic</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-primary"> Back to comics list</a>

        <form action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="input-group input-group-sm my-3">
                <span class="input-group-text" id="title">title</span>
                <input type="text" class="form-control" aria-describedby="title" name="title"
                    value="{{ $comic['title'] }}">
            </div>

            <div class="input-group my-3 textarea-form">
                <span class="input-group-text" id="description">description</span>
                <textarea class="form-control" aria-describedby="description" name="description">{{ $comic['description'] }}</textarea>
            </div>

            <div class="input-group input-group-sm my-3">
                <span class="input-group-text" id="price">price</span>
                <input type="number" class="form-control" aria-describedby="price" name="price"
                    value="{{ $comic['price'] }}">
            </div>

            <div class="input-group input-group-sm my-3">
                <span class="input-group-text" id="series">series</span>
                <input type="text" class="form-control" aria-describedby="series" name="series"
                    value="{{ $comic['series'] }}">
            </div>

            <button class="btn btn-primary"> Save </button>

            </button>
        </form>
    </section>
@endsection
