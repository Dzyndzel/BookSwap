<?php

namespace App\Http\Controllers;

use App\Book;
use DummyFullModelClass;
use App\lain;
use Request;

class BooksController extends Controller
{
    public function index(){

        $books = Book::all();
        return view('books.index')->with('books', $books);
    }

    public function show($id){

        $book = Book::findOrFail($id);

        return view('books.book')->with('book', $book);
    }

    public function create(){
        return view('books.create');
    }

    public function store(){
        $input = Request::all();
        $input['user_id'] = 1;
        $input['view_count'] = 0;

        Book::create($input);

        return redirect('books');
    }
}
