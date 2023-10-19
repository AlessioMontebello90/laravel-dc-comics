@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>COMICS LIST</h1>
        @if (Route::currentRouteName() != 'comics.index')
            <a href="{{ route('comics.index') }}" class="btn btn-primary"> Back to comic list</a>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">&#10033;</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">SERIES</th>
                    <th scope="col">SALE D.</th>
                    <th scope="col">TYPE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td class="badge bg-warning text-wrap">{{ $comic->price . '€' }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <div class="d-flex flex-column button-change-db">
                                <a href="{{ route('comics.show', $comic->id) }}" style="background-color: orange"
                                    class="px-3 py-2 mt-3 rounded-circle">
                                    Info
                                </a>
                                <a href="{{ route('comics.edit', $comic) }}" style="background-color: lightblue "
                                    class="px-3 py-2 mt-3 rounded-circle">
                                    Change
                                </a>
                                <form action="{{ route('comics.destroy', $comic) }}" style="background-color: red"
                                    class="px-2 py-2 mt-3 rounded-circle" method="POST">

                                    @csrf
                                    <form action="{{ route('comics.destroy', $comic) }}" style=""
                                        class="px-2 py-1 mt-3 rounded-circle" method="POST">

                                        @csrf

                                        @method('DELETE')

                                        <button class="btn background-color: red"> Delete </button>
                                    </form>
                                    @method('DELETE')


                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('comics.create') }}" class="btn btn-warning"> create new comic</a>
    </section>
@endsection
