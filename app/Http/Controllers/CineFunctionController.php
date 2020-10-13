<?php

namespace App\Http\Controllers;
use App\CineFunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
      //return view('cineFunctions.index', compact ('cineFunctions')); 
      
       // $cineFunctions = DB::table('cineFunctions')->paginate(2);
       return view('cineFunctions.index', compact ('cineFunctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cineFunctions.create');
    }
//jaz
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        CineFunction:: create($request->all());
        return redirect()->route('cineFunctions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function show(CineFunction $cineFunction)
    {
        return view('cineFunctions.show',compact ('cineFunction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function edit(CineFunction $cineFunction)
    {
        return view ('cineFunctions.edit',compact ('cineFunction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CineFunction $CineFunction)
    {
        $request->validate(
            [
                'start'      => 'required',
                'end'  => 'required',
                'available'  => 'required',
                'level'     => 'required'
            ]  
        );

        $CineFunction->update($request->all());

        return redirect()->route('cineFunctions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CineFunction  $cineFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CineFunction $cineFunction)
    {
        $cineFunction->delete();
        return redirect()->route('cineFunctions.index');
    }
}
