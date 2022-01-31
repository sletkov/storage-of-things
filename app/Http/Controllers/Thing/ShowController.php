<?php


namespace App\Http\Controllers\Thing;


use App\Models\Thing;

class ShowController extends BaseController
{
    public function __invoke(Thing $thing)
    {
        return view('thing.show', compact('thing'));
    }
}
