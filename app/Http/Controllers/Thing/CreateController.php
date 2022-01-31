<?php


namespace App\Http\Controllers\Thing;


class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('thing.create');
    }
}
