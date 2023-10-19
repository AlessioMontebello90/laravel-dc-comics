@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>New comics added</h1>
        <a href="{{ route('comics.index') }}" class="btn mt-5 btn-warning"> Back to the comics list</a>


    </section>
@endsection
