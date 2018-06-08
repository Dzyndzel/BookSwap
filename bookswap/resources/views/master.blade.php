<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--NavBar-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href={{ url('main') }}>BookSwap</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('books') }}">Przeglądaj książki</a></li>
            <li><a href="{{ url('books/create') }}">Dodaj książkę</a></li>
        </ul>
        @if (!Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li><a href={{ url('login') }}><span class="glyphicon glyphicon-log-in"></span> Zaloguj się</a></li>
                <li><a href={{ url('register') }}><span class="glyphicon glyphicon-user"></span> Zarejestruj się</a></li>
            </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
                <li><a href={{ url('offers') }}>Oferty</a></li>
                <li><a href={{ url('logout') }}><span class="glyphicon glyphicon-log-out"></span> Wyloguj się</a></li>
            </ul>
        @endif
    </div>
</nav>
<!--NavBar-->
<!--Content-->
@yield('content')
<!--Content-->
<!--Footer-->
<hr class="clearfix w-100 d-md-none">
    <div class="container text-center text-md-left">
        <div class="row">
                <p><a href={{ url('privacyPolicy')}}>Polityka prywatności</a>
                    <a href={{ url('contact') }}>Kontakt</a>
		            <a href={{ url('about') }}>O nas</a></p>
            </div>
        </div>
    </div>

</footer>
<!--/.Footer-->
</body>
</html>