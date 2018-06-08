@extends('master')

@section('content')
    <div class = "container">
        <h1>Książki</h1>
    </div>
    @foreach($books as $book)
        <div class = "container">
            <h4>
                Tytuł:<a href="/books/{{ $book->id }}">{{ $book->title }}</a>
            </h4>
            <h5> Autor: {{ $book->author }}</h5>
            <div class="body">{{ $book->description }}</div>
            @if( Auth::id() == $book->user_id)
                {!! link_to_action('BooksController@destroy','Usuń',[$book->id]) !!}
            @else
                {!! link_to_action('BooksController@swap','Wymień się',[$book->user_id]) !!}
            @endif
            <hr>
        </div>
    @endforeach
@endsection