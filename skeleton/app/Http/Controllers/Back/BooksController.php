<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Show the books page.
     *
     * @return \Illuminate\Http\Response
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        $books = Book::where([])->paginate(10);

        return view('back.books.index', compact('books'));
    }

    /**
     * Show the books create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.books.create');
    }

    /**`
     * Show the books store create.
     *
     * @param BookRequest $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(BookRequest $request)
    {
        try {
            $book = new Book();
            $book->author = $request->get('author');
            $book->title = $request->get('title');
            $book->description = $request->get('description');
            $book->isbn = $request->get('isbn');
            $book->user_id = auth()->user()->id;
            $book->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.books.index'));
    }

    /**
     * Show the books edit page.
     *
     * @param Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('back.books.edit', compact('book'));
    }

    /**
     * Show the books edit page.
     *
     * @param Book $contact
     * @param BookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(Book $contact, BookRequest $request)
    {
        try {
            $contact->author = $request->get('author');
            $contact->title = $request->get('title');
            $contact->description = $request->get('description');
            $contact->isbn = $request->get('isbn');
            $contact->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.books.index'));
    }

    /**
     * Show the books edit page.
     *
     * @param Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        try {
            $book->delete();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.books.index'));
    }
}
