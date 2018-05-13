@extends('back.layout')

@section('title', trans('dictionary.books'))

@push('page-actions')
<a href="{{ route('back.books.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.books.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.books.store']]) !!}
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('title', 'Tytuł') !!}
                            {!! Form::text('title') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('author', 'Autor') !!}
                            {!! Form::text('author') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('isbn', 'ISBN') !!}
                            {!! Form::text('isbn') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('description', 'Opis') !!}
                            {!! Form::textarea('description') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>
                    <hr />

                    <button class="btn btn-info btn-fill pull-right">@lang('dictionary.create')</button>
                    <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection