@extends('master')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href={{ url('main') }} [routerLink]="['/']">Strona główna</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">O nas</li>
            </ol>
        </nav>
        <div class="page-header">
            <h2 class="text-center">O nas</h2>
        </div>
    </div>

        <div class="container text-center text-md-left">
            <img class="img-responsive" src=src="{{ URL::to('/assets/img/awesome.jpg') }} alt="WeAre">
        </div>

@stop