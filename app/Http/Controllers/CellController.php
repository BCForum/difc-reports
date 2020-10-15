<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cell;
use App\Models\Person;
use App\Http\Resources\Cell as CellResource;
use App\Http\Resources\CellCollection;
use App\Http\Resources\Person as PersonResource;
use App\Http\Resources\CellDetailCollection;

class CellController extends Controller
{
    public function index()
    {
        return new CellCollection(Cell::all());
    }

    public function show($id)
    {
        return new CellResource(Cell::findOrFail($id));
    }

    public function showmembers($id)
    {
        $cellresource = new CellResource(Cell::findOrFail($id));

        return new CellDetailCollection($cellresource->members);
    }

    public function showshepherd(Request $request, $id)
    {
        $cellresource = new CellResource(Cell::findOrFail($id));

        return new PersonResource($cellresource->shepherd);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'shepherd_id' => 'required',
                'address' => 'required',
                'city' => 'required',
                'post_code' => 'required|max:4'
            ]
            );

        $cell = Cell::create($request->all());

        return (new CellResource($cell))
                ->response()
                ->setStatusCode(201);

    }
}
