@extends('master')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ url('main') }} [routerLink]="['/']">Strona główna</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
        </ol>
    </nav>
    <div class="page-header">
        <h2 class="text-center">Kontakt</h2>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2" for="subject">Temat: </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="emil">Twój Email</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="categoryName">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="content">Treść: </label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="content" rows="20">Treść</textarea>
                    </div>
                </div>
                <div class="col-sm-offset-10 col-sm-3">
                    <button type="button" class="btn btn-default" id="send">Wyślij</button>
            </form>
        </div>
    </div>
</div>
@stop