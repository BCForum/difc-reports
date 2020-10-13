<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonType;
use App\Http\Resources\PersonType as PersonTypeResource;

class PersonTypeController extends Controller
{
    public function index()
    {
        return new PersonTypeCollection(PersonType::all());
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
}
