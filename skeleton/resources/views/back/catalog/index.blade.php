@extends('back.layout')

@section('title', trans('dictionary.books'))

@push('page-actions')
<a href="{{ route('back.books.create') }}" class="btn btn-fill btn-primary">@lang('messages.add-new')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="content">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>@lang('dictionary.title')</th>
                            <th width="15%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($books as $book)
                            <tr>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->title }}</td>
                                <td class="td-actions">
                                    {!! Form::open(['method' => 'get', 'route' => ['back.books.show', $book->id]]) !!}
                                    <button class="btn btn-default btn-xs">
                                        <i class="fa fa-search-plus"></i>
                                    </button>
                                    {!! Form::close() !!}
                                    @if( Auth::user() && Auth::user()->id  == $book->user_id ):
                                    {!! Form::open(['method' => 'get', 'route' => ['back.books.edit', $book->id]]) !!}
                                    <button class="btn btn-default btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'route' => ['back.books.destroy', $book->id], 'data-confirm' => trans('messages.confirm'), 'data-title' => trans('messages.confirm-title'), 'data-type' => 'warning']) !!}
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

                    {{--{{ $books->links() }}--}}
                </div>
            </div>
        </div>
    </div>
@endsection