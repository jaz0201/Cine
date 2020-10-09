@extends('layout.layout')
@section('title', 'Peliculas')
@section('content')



    <table class="table">

        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Duración</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)

                <tr>
                    <th scope="row">{{ $movie->name }}</th>
                    <td>{{ $movie->duration }}</td>
                    <td>{{ $movie->synopsis }}</td>
                    <td>
                        <!--<div class="btn-group btn-group-sm" role="group" aria-label="">
                          <button type="button" class="btn btn-secondary">Ver</button>
                          <button type="button" class="btn btn-secondary">Editar</button>
                          <button type="button" class="btn btn-secondary">Eliminar</button>

                        </div -->
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form action="{{route('movies.destroy',$movie->id)}}" method="post">
                          <a class="btn btn-secondary" href="{{route('movies.show', $movie->id)}}">Ver</a>
                          <a class="btn btn-secondary" href="{{route('movies.edit', $movie->id)}}">Editar</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        </td>
                </tr>

            @empty
                <h3>No hay datos</h3>

            @endforelse

        </tbody>
    </table>

@endsection
