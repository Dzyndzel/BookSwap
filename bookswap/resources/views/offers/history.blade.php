@extends('master')

@section('content')
    <div class="container">
        <h1>Historia:</h1>

        @foreach($offers1 as $offer)
            @foreach($users as $user)
                @if($offer->fst_user == $user->id)
                    <?php
                    $name = $user->name;
                    ?>
                @endif
            @endforeach
            <h2>
                <a href="/history/{{ $offer->id }}"> wymiana z {{ $name }}</a>
            </h2>
        @endforeach
        @foreach($offers2 as $offer)
            @foreach($users as $user)
                @if($offer->fst_user == $user->id)
                    <?php
                    $name = $user->name;
                    ?>
                @endif
            @endforeach
            <h2>
                <a href="/history/{{ $offer->id }}"> wymiana z {{ $name }}</a>
            </h2>
        @endforeach
    </div>
@endsection