@extends('layouts.app')

@section('main-content')
    <section class="container mt-5">
        <h1>COMICS LIST</h1>
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
                        <td style="background-color: orange">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                info
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
