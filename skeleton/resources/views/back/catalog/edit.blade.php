@extends('back.layout')

@section('title', trans('dictionary.catalog'))

@push('page-actions')
    <a href="{{ route('back.catalog.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('dictionary.update'): {{ $book->title }}</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'put', 'route' => ['back.catalog.update', $book->id], 'files' => true]) !!}

                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('title', 'Tytuł') !!}
                            {!! Form::text('title', $book->title) !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('author', 'Autor') !!}
                            {!! Form::text('author', $book->author) !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('isbn', 'ISBN') !!}
                            {!! Form::text('isbn', $book->isbn) !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('description', 'Opis') !!}
                            {!! Form::textarea('description', $book->description) !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                        <hr />

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.update')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection