@extends('layouts.app')
@section('content')
<br><br>

<form action="{{route('entrances.store')}}" method="post">
    @csrf

    <div class="row">
        <!--<div class="col-md">
            <label for="">Nombre:</label>
            <input class="form-control" type="string" name="name" id="" >
        </div>-->

        <div class="col-md">
            <label for="">Sala:</label>
            <input class="form-control" type="string" name="room" id="" >
        </div>
        <div class="col-md">
            <label for="">Precio:</label>
            <input class="form-control" type="float" name="price" id="" >
        </div>
        <div class="col-md">
            <label for="">Hora:</label>
            <input class="form-control" type="timeTz" name="hourEntrance" id="" >
        </div>
    
<br><br>
       
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">

         
        </div>
    </form>


@endsection
