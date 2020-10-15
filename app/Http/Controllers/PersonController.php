<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Cell;
use App\Http\Resources\Person as PersonResource;
use App\Http\Resources\PersonCollection;
use App\Http\Resources\CellCollection;

class PersonController extends Controller
{
    public function index()
    {
        return new PersonCollection(Person::all());
    }

    public function show($id)
    {
        return new PersonResource(Person::findOrFail($id));
    }

    public function getcells($id)
    {
        $personresource = new PersonResource(Person::findOrFail($id));
        return new CellCollection($personresource->cells);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'phone_no'=>'required',
            'person_type'=>'required',
        ]);

        $person = Person::create($request->all());

        return (new PersonResource($person))
                ->response()
                ->setStatusCode(201);

    }
}
