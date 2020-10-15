<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PersonType;
use App\Http\Resources\PersonType as PersonTypeResource;
use App\Http\Resources\PersonTypeCollection;

class PersonTypeController extends Controller
{
    public function index()
    {
        return new PersonTypeCollection(PersonType::all());
    }

    public function show(Request $request, $code)
    {
        return new PersonTypeResource(PersonType::findOrFail($code));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|max:20',
        ]);

        $persontype = PersonType::create($request->all());

        return (new PersonTypeResource($persontype))
                ->response()
                ->setStatusCode(201);
    }

    public function delete($code)
    {
        $persontype = PersonType::findOrFail($code);
        $persontype->delete();
        return response()->json(null, 204);
    }


}
