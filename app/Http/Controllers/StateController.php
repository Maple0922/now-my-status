<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        return State::all();
    }

    public function store(Request $request)
    {
        return State::create($request->all());
    }

    public function show(State $state)
    {
        return $state;
    }

    public function update(Request $request, State $state)
    {
        $state->update($request->all());

        return $state;
    }

    public function destroy(State $state)
    {
        $state->delete();

        return $state;
    }

    public function items()
    {
        return Item::all();
    }

    public function item(Int $id)
    {
        return Item::where('id', $id)->first();
    }
}
