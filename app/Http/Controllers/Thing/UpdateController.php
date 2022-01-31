<?php


namespace App\Http\Controllers\Thing;


use App\Models\Thing;

class UpdateController extends BaseController
{
    public function __invoke(Thing $thing)
    {
        return redirect()->route('thing.show', $thing->id);
    }
}
