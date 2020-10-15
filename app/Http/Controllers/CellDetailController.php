<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CellDetail;
use App\Http\Resources\CellDetail as CellDetailResource;
use App\Http\Resources\CellDetailCollection;

class CellDetailController extends Controller
{
    public function celllist(Request $request, $cell_id)
    {
        return new CellDetailCollection(CellDetail::findOrFail()
                                        ->where('cell_id', $cell_id));
    }

    public function store(Request $request)
    {
        $request->validate([
                'cell_id'=>'required',
                'person_id' => 'required',
                'person_type' => 'required',
            ]
            );

        $celldetails = CellDetail::create($request->all());

        return (new CellDetailResource($celldetails))
                ->response()
                ->setStatusCode(201);
    }
}
