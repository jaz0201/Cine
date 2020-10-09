<?php

namespace App\Http\Controllers;

use App\CineFunction;
use Illuminate\Http\Request;

class CineFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cineFunctions = CineFunction::all(); //consulta
        return view('cineFunctions.index', compact ('cineFunctions')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function show(CineFunction $cineFunction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function edit(CineFunction $cineFunction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CineFunction $cineFunction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CineFunction $cineFunction)
    {
        //
    }
}
