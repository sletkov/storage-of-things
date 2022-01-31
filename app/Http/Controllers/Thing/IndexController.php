<?php


namespace App\Http\Controllers\Thing;


use App\Models\Thing;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $things = Thing::all();

        return view('thing.index',compact('things'));
    }
}
