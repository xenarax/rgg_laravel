<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class ItemController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $item = new Item;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->status = 0; // By default not done.

        $item->save();
//
        return redirect('/');
    }

    public function edit($id)
    {

    }

    public function toggleDone($id)
    {
        $item = Item::findOrFail($id);

        if ($item->status == 0) {
            $item->status = 1;
            $item->update();

            return true;
        } else {
            $item->status = 0;
            $item->update();

            return true;
        }

        return false;
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $item = Item::find($id); //select the book using primary id
        $item->delete();

        return redirect('/');
    }
}
