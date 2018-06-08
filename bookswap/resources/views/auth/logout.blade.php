@extends('master')

@section('content')
    @if (Auth::check())
        <?php
        Auth::logout();
        ?>
    @endif
@endsection