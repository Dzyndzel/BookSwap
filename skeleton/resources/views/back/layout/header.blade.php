<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-default btn-fill btn-round btn-icon">
                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                <li><a href="{{ route('guest.books') }}">Przeglądaj książki</a></li>
                @if (!Auth::guest())
                    <li><a href="{{ route('back.catalog.index') }}">Moje katalogii</a></li>
                    <li><a href="{{ route('back.books.create') }}">Dodaj książkę</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        <a href="{{ route('login') }}">
                            <span class="glyphicon glyphicon-log-in"></span> @lang('dictionary.login')</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <span class="glyphicon glyphicon-user"></span> @lang('dictionary.signup')</a>
                    </li>
                @else
                    <li><a href="{{ route('logout') }}">
                            <span><i class="fa fa-sign-out"></i>
                            <p>@lang('dictionary.logout')</p>
                            </span>
                        </a>
                    </li>

                @endif
            </ul>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar">A</span>
                <span class="icon-bar">B</span>
                <span class="icon-bar">C</span>
            </button>

            <a class="navbar-brand" href="#">@yield('title')</a>
        </div>
        @if (!Auth::guest())
            <div class="collapse navbar-collapse">
                <div class="text-right" style="padding-top: 3px">
                    @stack('page-actions')
                </div>
            </div>
        @endif


        {{--@if (!Auth::guest())--}}
        {{--<ul class="nav">--}}
        {{--<li class="{{ Route::is('back.contacts.index') ? 'active' : '' }}">--}}
        {{--<a href="{{ route('back.contacts.index') }}">--}}
        {{--<i class="fa fa-address-book"></i>--}}
        {{--<p>@lang('dictionary.contacts')</p>--}}
        {{--</a>--}}
        {{--</li>--}}

        {{--<li class="{{ Route::is('back.users.index') ? 'active' : '' }}">--}}
        {{--<a href="{{ route('back.users.index') }}">--}}
        {{--<i class="fa fa-users"></i>--}}
        {{--<p>@lang('dictionary.users')</p>--}}
        {{--</a>--}}
        {{--</li>--}}

        {{--<li>--}}
        {{--<a href="">--}}

        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--@endif--}}
    </div>
</nav>