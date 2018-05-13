<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\CatalogRequest;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    /**
     * Show the books page.
     *
     * @return \Illuminate\Http\Response
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        $catalogs = Catalog::where([])->paginate(10);

        return view('back.catalog.index', compact('catalogs'));
    }

    /**
     * Show the books create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.catalog.create');
    }

    /**`
     * Show the books store create.
     *
     * @param CatalogRequest $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(CatalogRequest $request)
    {
        try {
            $catalog = new Catalog();
            $catalog->name = $request->get('name');
            $catalog->description = $request->get('description');
            $catalog->is_hidden = $request->get('is_hidden');
            $catalog->user_id = Auth::user()->id;
            $catalog->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
            flash($e->getMessage());
        }

        return redirect(route('back.catalog.index'));
    }

    /**
     * Show the books edit page.
     *
     * @param Catalog $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $catalog)
    {
        return view('back.catalog.edit', compact('catalog'));
    }

    /**
     * Show the books edit page.
     *
     * @param Catalog $catalog
     * @param CatalogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(Catalog $catalog, CatalogRequest $request)
    {
        try {
            $catalog->name = $request->get('name');
            $catalog->description = $request->get('description');
            $catalog->is_hidden = $request->get('is_hidden');
            $catalog->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.catalog.index'));
    }

    /**
     * Show the books edit page.
     *
     * @param Catalog $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $catalog)
    {
        try {
            $catalog->delete();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.catalog.index'));
    }
}
