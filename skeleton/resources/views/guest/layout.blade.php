@extends('guest.theme')

@section('body')
    <div class="wrapper  wrapper-full-page">
        {{--@include('back.layout.sidebar')--}}
        <div class="main-panel">
            @include('back.layout.header')

            <div class="content">
                <div class="container-fluid">
                    @include('flash::message')

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
{{--<link href="{{ mix('css/dashboard.css') }}" rel="stylesheet"/>--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endpush

@push('scripts')
<script src="{{ mix('js/dashboard.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endpush