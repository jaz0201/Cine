{{--@forelse ($cineFunctions as $cineFunction)
<li> {{ $cineFunction->start }} > {{ $cineFunction->end }} > {{ $cineFunction->available }} > {{ $cineFunction->level }} </li>
@empty
<h1>No hay funciones disponibles :( </h1>

@endforelse--}}
@extends('layouts.app')
@section('title','Funciones')
@section('content')
    
<div class="row">
  <div class="col-sm-2">
      <a href="{{ route('cineFunctions.create') }}">
        <br><br>
          <button class="btn btn-primary">Agregar</button>
      </a>
  </div>
  <br><br>
  <!--col-sm-10-->
  
  <div class="col-sm-10">
    <br><br><h1>Funciones registradas</h1></div>
</div>
<br><br>

@forelse($cineFunctions as $CineFunction)
  <div class="row">
      <div class="card col-sm bg-light" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          
          <div class="card-body">

              <h3 class="card-title">{{ $CineFunction->start }}</h3>
              <h5 class="card-text">{{ $CineFunction->end }}</h5>
              <p class="card-text">{{ $CineFunction->available }}</p>
              <p class="card-text text-muted">{{ $CineFunction->level }}</p>
              <form action="{{ route('cineFunctions.destroy', $CineFunction->id) }}" method="post">
                  <a class="btn btn-secondary" href="{{ route('cineFunctions.show', $CineFunction->id) }}">Ver</a>
                  <a class="btn btn-secondary" href="{{ route('cineFunctions.edit', $CineFunction->id) }}">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
          </div>
      </div>
  </div>
  <br>
@empty
  <div><h3>No hay funciones registradas en la base de datos :(</h3></div>
@endforelse

{{--{{ $cineFunctions->links() }}--}}

@endsection
