<?php

namespace App\Http\Controllers;

use App\Models\GroupedCity;
use Illuminate\Http\Request;

class GroupedCityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grouped_cities = GroupedCity::with('items')->get();;
        return $grouped_cities;
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
    public function show(GroupedCity $groupedCity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GroupedCity $groupedCity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GroupedCity $groupedCity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupedCity $groupedCity)
    {
        //
    }
}
