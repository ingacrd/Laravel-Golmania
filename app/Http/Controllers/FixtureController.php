<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    //return json list of fixtures
    public function index(){
        $fixtures = Fixture::all();
        return response()->json($fixtures);
    }

    //store a newly resourse
    public function store(Request $request) {
        $validatedData = $request->validate([
            'date' => 'required|string',
            'time' => 'required|string',
            'place' => 'required|string',
            'city' => 'required|string',
        ]);
        
        $fixture = Fixture::create($validatedData);
        return response()->json($fixture,201);

    }

    //display the resource
    public function show(Fixture $fixture){
        return response()->json($fixture);
    }

    //update the resource in storage
    public function update(Request $request, Fixture $fixture){
        $validatedData = $request->validate([
            'date' => 'required|string',
            'time' => 'required|string',
            'place' => 'required|string',
            'city' => 'required|string',
        ]);

        $fixture->update($validatedData);

        return response()->json($fixture, 200);
    }

    //remove from storage
    public function destroy(Fixture $fixture){
        $fixture->delete();
        return response()->json(null, 204);
    }
}
