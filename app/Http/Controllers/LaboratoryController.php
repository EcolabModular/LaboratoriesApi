<?php

namespace App\Http\Controllers;

use App\Laboratory;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LaboratoryController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return laboratories list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $laboratories = Laboratory::all();

        return $this->showAll($laboratories);
    }

    /**
     * Create an instance of Laboratory
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'institution_id' => 'required|integer|min:1',
        ];

        $this->validate($request, $rules);

        $laboratory = Laboratory::create($request->all());

        return $this->successResponse($laboratory, Response::HTTP_CREATED);
    }

    /**
     * Return an specific laboratory
     * @return Illuminate\Http\Response
     */
    public function show($laboratory)
    {
        $laboratory = Laboratory::findOrFail($laboratory);

        return $this->successResponse($laboratory);
    }

    /**
     * Update the information of an existing laboratory
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $laboratory)
    {
        $rules = [
            'name' => 'max:255',
            'description' => 'max:255',
            'institution_id' => 'required|integer|min:1',
        ];

        $this->validate($request, $rules);

        $laboratory = Laboratory::findOrFail($laboratory);

        $laboratory->fill($request->all());

        if ($laboratory->isClean()) {
            return $this->errorResponse('Al menos un valor debe ser distinto', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $laboratory->save();

        return $this->successResponse($laboratory);
    }

    /**
     * Removes an existing laboratory
     * @return Illuminate\Http\Response
     */
    public function destroy($laboratory)
    {
        $laboratory = Laboratory::findOrFail($laboratory);

        $laboratory->delete();

        return $this->successResponse($laboratory);
    }
}
