@extends('master')

@section('content')
    <div class="container">
        <h1>Oferty</h1>

        @foreach($offers as $offer)
            <h2>

                <a href="/offers/{{ $offer->id }}"> oferta od {{ $offer->fst_user }}</a>
            </h2>
        @endforeach
    </div>
@endsection