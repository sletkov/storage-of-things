<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('place.index', compact('places',));
    }

    public function create()
    {
        $user = auth()->user();
        return view('place.create',compact('user'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'master' => 'required|string',
        ]);

//        $tags = $data['tags'];
//        unset($data['tags']);

        Place::create($data);
//        $place->tags()->attach($tags);

        return redirect()->route('place.index');
    }

    public function show(Place $place)
    {
        return view('place.show', compact('place'));
    }

    public function edit(Place $place)
    {
        $user = auth()->user();
        return view('place.edit', compact('place'));
    }

    public function update(Place $place)
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'master' => 'string',
            'place_id' => '',

        ]);

        $place->update($data);

        return redirect()->route('place.show', $place->id);
    }

    public function delete(Place $place)
    {
        $place->delete();
        return redirect()->route('place.index');
    }
}
