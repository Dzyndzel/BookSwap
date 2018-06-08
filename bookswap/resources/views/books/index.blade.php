@extends('master')

@section('content')
    <h1>Książki</h1>

    @foreach($books as $book)
        <h2>
            <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
        </h2>
        <h3>{{ $book->author }}</h3>
        <div class="body">{{ $book->description }}</div>
        @if( Auth::id() == $book->user_id)
            {!! link_to_action('BooksController@destroy','Usuń',[$book->id]) !!}
        @endif
    @endforeach
@endsection