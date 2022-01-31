<?php


namespace App\Http\Controllers\Thing;


use App\Models\Thing;

class EditController extends BaseController
{
    public function __invoke(Thing $thing)
    {
        return view('thing.edit');
    }
}
