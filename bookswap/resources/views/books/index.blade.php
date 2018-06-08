@extends('master')

@section('content')
    <h1>Książki</h1>

    @foreach($books as $book)
        <h2>
            <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
        </h2>
        <h3>{{ $book->author }}</h3>
        <div class="body">{{ $book->description }}</div>
    @endforeach
@endsection