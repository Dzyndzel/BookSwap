@extends('master')

@section('content')
    <div class="container">
        <h1>Jak to działa!</h1>
        <ul class="list-group">
            <li class="list-group-item"><p><a href={{ url('register')}}>Zarejestruj się!</a></p>
                <p>To proste dołącz do naszej wspaniałej społeczności za pomocą zaledwie paru kliknięć!</p>
            </li>
            <li class="list-group-item"><p><a href={{ url('books/create')}}>Dodaj swoje książki!</a></p>
                <p>Udostępnij informację na temat książek które nie są Ci już potrzene a jesteś gotów podzielić się nimi ze światem!</p>
            </li>
            <li class="list-group-item"><p><a href={{ url('books')}}>Przejrzyj dostępne książki!</a></p>
                <p>Zobacz co inni użytkownicy naszej społeczności są gotowi wymienić!</p>
            </li>
            <li class="list-group-item">.... i wymień się!</li>
        </ul>
    </div>
@stop