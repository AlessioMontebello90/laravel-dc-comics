@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">

        {{-- form section post method --}}

        <h1>New comics added</h1>
        <a href="{{ route('comics.index') }}" class="btn mt-5 btn-warning"> Back to the comics list</a>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="input-group input-group-sm my-5">
                <span class="input-group-text" id="title">Title</span>
                <input type="text" class="form-control" aria-describedby="title" name="title">
            </div>

            <div class="input-group my-3 textarea-form">
                <span class="input-group-text" id="description">Description</span>
                <textarea class="form-control" aria-describedby="description" name="description"></textarea>
            </div>

            <div class="input-group input-group-sm my-5">
                <span class="input-group-text" id="price">Price</span>
                <input type="number" class="form-control" aria-describedby="price" name="price">
            </div>

            <div class="input-group input-group-sm my-5">
                <span class="input-group-text" id="series">Series</span>
                <input type="text" class="form-control" aria-describedby="series" name="series">
            </div>

            <button class="btn btn-success"> add new

            </button>
        </form>


    </section>
@endsection
