<?php

namespace App\Http\Controllers;

use App\Models\CellDetails;
use Illuminate\Http\Request;

class CellDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cell_details = CellDetails::with('lat_lng_expression')->get();
        return response()->json($cell_details);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CellDetails $cellDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CellDetails $cellDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CellDetails $cellDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CellDetails $cellDetails)
    {
        //
    }
}
