<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use BaseController;
use View;
use App\Http\Controllers\Controller;
use Form;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Items::all();
        return View::make('index',
            ['items' => $items]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($title, $description)
    {
//        $title = $details->title;
//        $description = $details->description;
//        $status = "Not";

        $status = "Not";

        $items = new items;
        $items->title = $title;
        $items->description = $description;
        $items->status = $status;
        $items->save();

        echo "Created " . $title;
        return View::make('index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Items::find($id); //select the book using primary id
        $title = $items->title;
        $items->delete();;

        echo "Deleted " . $title;
        return View::make('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }



}
