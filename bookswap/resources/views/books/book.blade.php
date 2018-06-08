@extends('master')

@section('content')
        <h2>{{ $book->title }}</h2>
        <h3>{{ $book->author }}</h3>
        <div class="body">{{ $book->description }}</div>
@endsection