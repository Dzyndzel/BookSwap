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
            <div class="body">{{ str_limit($book->description, 250) }}</div>
            @if( Auth::id() == $book->user_id)
                <span class="glyphicon glyphicon-trash"></span>{!! link_to_action('BooksController@destroy',' Usuń',[$book->id]) !!}
            @else
                <span class="glyphicon glyphicon-retweet"></span>{!! link_to_action('BooksController@swap',' Wymień się',[$book->user_id]) !!}
            @endif
            <hr>
        </div>
    @endforeach
@endsection