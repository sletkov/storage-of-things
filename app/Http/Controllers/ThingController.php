<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Models\Thing;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ThingController extends Controller
{
    public function index()
    {
        $things = Thing::all();
        return view('thing.index', compact('things'));
    }

    public function create()
    {
        $user = auth()->user();
        return view('thing.create', compact('user'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'master' => 'required|string',
            'place_id' => '',
        ]);

//        $tags = $data['tags'];
//        unset($data['tags']);

        Thing::create($data);
//        $thing->tags()->attach($tags);

        return redirect()->route('thing.index');
    }

    public function show(Thing $thing)
    {
        return view('thing.show', compact('thing'));
    }

    public function edit(Thing $thing)
    {

        return view('thing.edit', compact('thing'));
    }

    public function update(Thing $thing)
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'master' => 'string',
            'place_id' => '',

        ]);

        $thing->update($data);

        Mail::to($thing->master)->send(new NotificationMail());
        return redirect()->route('thing.show', $thing->id);
    }

    public function delete(Thing $thing)
    {
        $thing->delete();
        return redirect()->route('thing.index');
    }
}
