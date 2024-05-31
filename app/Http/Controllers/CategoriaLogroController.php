<?php

namespace App\Http\Controllers;

use App\Models\CategoriaLogro;
use Illuminate\Http\Request;

class CategoriaLogroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = CategoriaLogro::all();
        return $categorias;
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
    public function show(CategoriaLogro $categoriaLogro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaLogro $categoriaLogro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriaLogro $categoriaLogro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaLogro $categoriaLogro)
    {
        //
    }
}
