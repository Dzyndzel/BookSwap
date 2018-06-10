@extends('master')

@section('content')
    @if (Auth::check())
        <div class="container">
            <p>Wymiana z {!! $user->name !!}, mail: {!! $user->email !!}</p>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <p>Książki, które oddałeś</p>
                    @foreach($books as $book)
                        @if($book->user_id == Auth::id())
                            <h2>
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6">
                    <p>Książki, które otrzymłeś</p>
                    @foreach($books as $book)
                        @if($book->user_id <> Auth::id())
                            <?php
                            $user_id = $book->user_id
                            ?>
                            <h2>
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <h1>Zaloguj się!</h1>
    @endif
@endsection