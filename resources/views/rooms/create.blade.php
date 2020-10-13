@extends('layouts.app')
@section('content')
<br><br>

<form action="{{route('rooms.store')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-md">
            <label for="">Asiento:</label>
            <input class="form-control" type="tinyInteger" name="chairs" id="" >
        </div>
        <div class="col-md">
            <label for="">Locación:</label>
            <input class="form-control" type="string" name="location" id="" >
        </div>
        <div class="col-md">
            <label for="">Capacidad:</label>
            <input class="form-control" type="tinyInteger" name="capacity" id="" >
        </div>
    
<br><br>
       
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">

         
        </div>
    </form>


@endsection
    