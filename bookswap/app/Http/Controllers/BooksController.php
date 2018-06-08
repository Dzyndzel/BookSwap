<?php

namespace App\Http\Controllers;

use App\Book;
use DummyFullModelClass;
use App\lain;
use Illuminate\Support\Facades\Auth;
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
        $input['user_id'] = Auth::id();
        $input['view_count'] = 0;

        Book::create($input);

        return redirect('books');
    }

    public function destroy($id){
        $book = Book::findOrFail($id);
        if(Auth::id() == $book->user_id){
            Book::where('id', $id)->delete();
        }
        return redirect('books');
    }

    public function swap($id){

        $books = Book::all();
        return view('books.swap')->with('books', $books, 'id', $id);
    }

    public function swapped(){

        $input = Request::all();
        return $input;
    }

}
