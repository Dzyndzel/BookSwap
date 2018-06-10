<?php

namespace App\Http\Controllers;

use App\Book;
use App\Swap_book;
use App\Swap_offer;
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
        return view('books.swap')->with(array('books'=>$books, 'id'=>$id));
    }

    public function swapped(){

        $input = Request::all();
        if(!array_key_exists('first', $input) OR !array_key_exists('second', $input)){
            return "Brak książek do wymiany";
        }
        $input['second'];

        $fst_user = Auth::id();
        $scd_user = (Book::find($input['second'][0]))->user_id;

        if (Swap_offer::where([['fst_user', '=', $fst_user], ['scd_user', '=', $scd_user]])->exists()
        OR Swap_offer::where([['fst_user', '=', $scd_user], ['scd_user', '=', $fst_user]])->exists()){
            $so_tmp = Swap_offer::where([['fst_user', '=', $fst_user], ['scd_user', '=', $scd_user]])->first();
            Swap_book::where('swap_id','=',$so_tmp->id)->delete();
            $so_tmp->delete();
        }

        $so = new Swap_offer(array("fst_user"=>$fst_user,"scd_user"=>$scd_user,"msg"=>$input['msg']));
        $so->save();

        foreach ($input['first'] as $bk){
            Swap_book::create(array("book_id"=>$bk, "swap_id"=>$so->id, "owner"=>$fst_user));
        }
        foreach ($input['second'] as $bk){
            Swap_book::create(array("book_id"=>$bk, "swap_id"=>$so->id, "owner"=>$scd_user));
        }

        return redirect('books');
    }

}
