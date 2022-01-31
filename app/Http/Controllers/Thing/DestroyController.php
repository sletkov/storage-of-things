<?php


namespace App\Http\Controllers\Thing;


use App\Models\Thing;

class DestroyController extends BaseController
{
    public function __invoke(Thing $thing)
    {
        $thing->delete();
        return view('thing.index');
    }
}
