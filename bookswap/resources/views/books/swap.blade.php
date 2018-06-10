@extends('master')

@section('content')
    @if (Auth::check())
        {!! Form::open(['url' => 'main']) !!}
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Wybierz Twoje książki do propozycji</p>
                    @foreach($books as $book)
                        @if($book->user_id == Auth::id())
                            <h2>
                                {{ Form::checkbox('first[]', $book->id) }}
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6">
                    <p>Wybierz książki, które Ciebie interesują</p>
                    @foreach($books as $book)
                        @if($book->user_id == $id)
                            <h2>
                                {{ Form::checkbox('second[]', $book->id) }}
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                {!! Form::submit('Wymień', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
    @else
        <h1>Zaloguj się!</h1>
    @endif
@endsection