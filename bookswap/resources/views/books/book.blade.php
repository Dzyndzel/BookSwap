@extends('master')

@section('content')
    <?php
        $book['view_count'] = $book['view_count'] + 1;
        $book->save();
    ?>

        <h2>{{ $book->title }}</h2>
        <h3>{{ $book->author }}</h3>
        <div class="body">{{ $book->description }}</div>
        <p>Wyświetlono: {{ $book->view_count }} razy</p>

        @if( Auth::id() == $book->user_id)
            {!! link_to_action('BooksController@destroy','Usuń',[$book->id]) !!}
        @else
            {!! link_to_action('BooksController@swap','Wymień się',[$book->user_id]) !!}
        @endif
@endsection