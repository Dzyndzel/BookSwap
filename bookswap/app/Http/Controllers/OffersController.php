<?php

namespace App\Http\Controllers;

use App\Swap_book;
use App\Swap_offer;
use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    public function offers()
    {
        $offers = Swap_offer::where('scd_user', Auth::id())->get();
        $users = [];
        foreach ($offers as $offer){
            array_push($users, (User::where('id','=', $offer->fst_user))->first());
        }
        return view('offers.offers') -> with ([
            'offers' => $offers,
            'users' => $users
        ]);
    }
    public function offer($id)
    {
        $books_id = Swap_book::where('swap_id', $id)->get();
        $books = [];

        foreach ($books_id as $book_id){
            array_push($books, (Book::where('id','=', $book_id->book_id))->first());
        }

        return view('offers.offer') -> with ([
            'books' => $books,
            'id' => $id
            ]);
    }

    public function accept($id)
    {
        $so_tmp = Swap_offer::findOrFail($id);

        $books_id = Swap_book::where('swap_id','=',$so_tmp->id)->get();
        foreach ($books_id as $book_id){
            $book = Book::where('id','=', $book_id->book_id)->first();
            if ($book->user_id == Auth::id()){
                $book['user_id'] = $so_tmp->fst_user;
                $book->save();
            }
            else {
                $book['user_id'] = Auth::id();
                $book->save();
            }
            $book_id->delete();
        }
        $so_tmp->delete();
        return redirect('books');
    }

    public function destroy($id)
    {
        $so_tmp = Swap_offer::findOrFail($id);
        Swap_book::where('swap_id','=',$so_tmp->id)->delete();
        $so_tmp->delete();
        return redirect('books');
    }
}
