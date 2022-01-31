<?php


namespace App\Http\Controllers\Thing;


class StoreController extends BaseController
{
    public function __invoke()
    {
        return redirect()->route('thing.index');
    }
}
