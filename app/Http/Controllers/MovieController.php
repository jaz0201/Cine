<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //almacenar todos los datos de la tabla movies en una variable
      //  $movies = Movie::all(); //consulta
      $movies = DB::table('movies')->paginate(2);
       return view('movies.index', compact ('movies')); 
      // return view('movies.viewTable',compact('movies'));
       // print('Index de movieController');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Movie:: create($request->all());
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show',compact ('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
    return view ('movies.edit',compact ('movie'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate(
            [
                'name'      => 'required',
                'synopsis'  => '',
                'director'  => 'required',
                'gender'     => 'required',
                'duration'  => 'required',
                'available' => 'required'
            ]
        );

        $movie->update($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
       $movie->delete();
       return redirect()->route('movies.index');
    }
    public function viewTable()
    {
        $movies = DB::table('movies')->paginate(10);
        return view('movies.viewTable',compact('movies'));
    }
}
