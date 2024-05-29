<?php

namespace App\Http\Controllers;

use App\Models\CellLocation;
use Illuminate\Http\Request;

class CellLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cell_locations = CellLocation::with('cell_details.lat_lng_expression')->get();
        return $cell_locations;
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
    public function show(CellLocation $cellLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CellLocation $cellLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CellLocation $cellLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CellLocation $cellLocation)
    {
        //
    }
}
