<?php

namespace App\Http\Controllers;

use App\Swap_book;
use App\Swap_history;
use App\Swap_offer;
use App\Book;
use App\Swapped_books;
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
        $msg = Swap_offer::findOrFail($id)->msg;
        $books_id = Swap_book::where('swap_id', $id)->get();
        $books = [];

        foreach ($books_id as $book_id){
            array_push($books, (Book::where('id','=', $book_id->book_id))->first());
        }

        return view('offers.offer') -> with ([
            'books' => $books,
            'id' => $id,
            'msg' => $msg,
            ]);
    }

    public function accept($id)
    {
        $so_tmp = Swap_offer::findOrFail($id);
        $fst_mail = User::find($so_tmp['fst_user'])->email;
        $scd_mail = User::find($so_tmp['scd_user'])->email;
        $sh = new Swap_history(array(
            'fst_user'=>$so_tmp['fst_user'],
            'fst_mail'=>$fst_mail,
            'scd_user'=>$so_tmp['scd_user'],
            'scd_mail'=>$scd_mail
        ));
        $sh->save();
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
            $sb = new Swapped_books(array(
                "book_id"=>$book_id['book_id'],
                "swap_history_id"=>$sh->id,
                'owner'=>$book_id['owner']
            ));
            $sb->save();
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

    public function history()
    {
        $offers1 = Swap_history::where('scd_user', Auth::id())->get();
        $offers2 = Swap_history::where('fst_user', Auth::id())->get();
        $users = [];
        foreach ($offers1 as $offer){
            array_push($users, (User::where('id','=', $offer->fst_user))->first());
        }
        foreach ($offers2 as $offer){
            array_push($users, (User::where('id','=', $offer->fst_user))->first());
        }
        return view('offers.history') -> with ([
            'offers1' => $offers1,
            'offers2' => $offers2,
            'users' => $users
        ]);
    }


    public function history_id($id)
    {
        $books_id = Swapped_books::where('swap_history_id', $id)->get();
        $books = [];

        $so = Swap_history::find($id);

        if ($so->fst_user <> Auth::id()) {
            $id_u = $so->fst_user;
        }
        else {
            $id_u = $so->scd_user;
        }

        $user = User::find($id_u);

        foreach ($books_id as $book_id){
            $book_tmp = (Book::where('id','=', $book_id->book_id))->first();
            $book_tmp['user_id']=$book_id->owner;
            array_push($books, $book_tmp);
        }

        return view('offers.history_id') -> with ([
            'books' => $books,
            'id' => $id,
            'user' => $user,
        ]);
    }
}
