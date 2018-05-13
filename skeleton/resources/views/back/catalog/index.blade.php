@extends('back.layout')

@section('title', trans('dictionary.catalogs'))

@push('page-actions')
<a href="{{ route('back.catalog.create') }}" class="btn btn-fill btn-primary">@lang('messages.add-new')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>@lang('dictionary.title')</th>
                            <th>@lang('dictionary.description')</th>
                            <th width="15%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($catalogs as $catalog)
                            <tr>
                                <td>{{ $catalog->name }}</td>
                                <td>{{ substr($catalog->description,0,20) }}</td>
                                <td class="td-actions">
                                    {!! Form::open(['method' => 'get', 'route' => ['back.catalog.show', $catalog->id]]) !!}
                                    <button class="btn btn-default btn-xs">
                                        <i class="fa fa-search-plus"></i>
                                    </button>
                                    {!! Form::close() !!}
                                    @if( Auth::user() && Auth::user()->id  == $catalog->user_id ):
                                    {!! Form::open(['method' => 'get', 'route' => ['back.catalog.edit', $catalog->id]]) !!}
                                    <button class="btn btn-default btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'route' => ['back.catalog.destroy', $catalog->id], 'data-confirm' => trans('messages.confirm'), 'data-title' => trans('messages.confirm-title'), 'data-type' => 'warning']) !!}
                                    <button class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    {!! Form::close() !!}
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">@lang('messages.no-records')</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    {{--{{ $catalogs->links() }}--}}
                </div>
            </div>
        </div>
    </div>
@endsection