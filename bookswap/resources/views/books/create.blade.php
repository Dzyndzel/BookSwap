@extends('master')

@section('content')
    @if (Auth::check())
    <div class="container">
    {!! Form::open(['url' => 'books']) !!}

        <div class="form-group">
        {!! Form::label('title', 'Tytuł:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('author', 'Autor:') !!}
        {!! Form::text('author', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ISBN', 'ISBN:') !!}
        {!! Form::text('ISBN', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('description', 'Opis:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Dodaj książkę', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
    </div>
    @else
        <h1>Zaloguj się!</h1>
    @endif
@endsection