@extends('master')

@section('content')
    <div class="container">
        <h1>Oferty</h1>

        @foreach($offers as $offer)
            @foreach($users as $user)
                @if($offer->fst_user == $user->id)
                    <?php
                        $name = $user->name;
                    ?>
                @endif
            @endforeach
            <h2>
                <a href="/offers/{{ $offer->id }}"> oferta od {{ $name }}</a>
            </h2>
        @endforeach
    </div>
@endsection