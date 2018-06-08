@extends('master')

@section('content')
    <?php
        $book['view_count'] = $book['view_count'] + 1;
        $book->save();
    ?>


    <div class = "container">
        <h4>
            Tytuł:<a href="/books/{{ $book->id }}">{{ $book->title }}</a>
        </h4>
        <h5> Autor: {{ $book->author }}</h5>
        <div class="body">{{ $book->description }}</div>
        <p>Wyświetlono: {{ $book->view_count }} razy</p>

    @if( Auth::id() == $book->user_id)
        {!! link_to_action('BooksController@destroy','Usuń',[$book->id]) !!}
    @else
        {!! link_to_action('BooksController@swap','Wymień się',[$book->user_id]) !!}
    @endif
    </div>
@endsection