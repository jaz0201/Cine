@extends('layout.layout')

@section('title','Editar Funciones')
@section('content')

<br><br>


<div class="row">
    <div class="col-sm-10"><h1>Editar funciones</h1></div>
    <div class="col-sm-2">
        <a href="{{ route('cineFunctions.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


<div class="jumbotron">
    <form method="post" action="{{ route('cineFunctions.store') }}">
        @csrf



    <div class="row">
        <div class="col-md">
            <label for="">Comienzo:</label>
            <input class="form-control" type="time" name="start" id="" >
        </div>
        <div class="col-md">
            <label for="">Finaliza:</label>
            <input class="form-control" type="time" name="end" id="" >
        </div>
        <div>
            <label for="">Disponibilidad:</label>
            <select class="form-control" name="available" id="" required>
                <option value="">Seleccione una opción</option>
                <option value="1">Disponible</option>
                <option value="0">No disponible</option>
            </select>
        </div>
        <div>
            <label for="">Horario:</label>
            <select class="form-control" name="level" id="" required>
                <option value="">Seleccione un turno</option>
                <option value="mañana"> Mañana</option>
                <option value="tarde">Tarde</option>
                <option value="noche">Noche</option>
            </select>
        </div>
    
<br><br>
       
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">

         
        </div>
    </form>


@endsection
    