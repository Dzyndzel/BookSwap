@extends('master')

@section('content')
    @if (Auth::check())
        {!! Form::open(['url' => 'main']) !!}
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @foreach($books as $book)
                        @if($book->user_id == Auth::id())
                            <h2>
                                {{ Form::checkbox('first[]') }}
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6">
                    @foreach($books as $book)
                        @if($book->user_id == 1)
                            <h2>
                                {{ Form::checkbox('second[]') }}
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