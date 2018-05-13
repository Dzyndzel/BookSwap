@extends('back.layout')

@section('title', trans('dictionary.catalogs'))

@push('page-actions')
<a href="{{ route('back.catalog.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.catalogs.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.catalog.store']]) !!}
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('name', 'Nazwa') !!}
                            {!! Form::text('name') !!}
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
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::openGroup('is_hidden', 'Ukryty?') !!}
                            {!! Form::checkbox('is_hidden',1) !!}
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