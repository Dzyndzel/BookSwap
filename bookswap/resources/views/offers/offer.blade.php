@extends('master')

@section('content')
    @if (Auth::check())
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Książki, które oddasz</p>
                    @foreach($books as $book)
                        @if($book->user_id == Auth::id())
                            <h2>
                                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
                            </h2>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-6">
                    <p>Książki, które otrzymasz</p>
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
            <a href="/offers/accept/{!! $id !!}"><button class="btn">Zgoda</button></a>
            <a href="/books/swap/{!! $user_id !!}"><button  class="btn">Nowa propozycja</button></a>
            <a href="/offers/destroy/{!! $id !!}"><button class="btn">Odrzuć</button></a>
        </div>
    @else
        <h1>Zaloguj się!</h1>
    @endif
@endsection