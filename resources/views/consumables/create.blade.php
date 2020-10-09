@extends('layouts.app')
@section('content')
<br><br>

<form action="{{route('consumables.store')}}" method="post">
    @csrf

    <div class="row">
        <div class="col-md">
            <label for="">Articulo:</label>
            <input class="form-control" type="text" name="name" id="" >
        </div>
        <div class="col-md">
            <label for="">Precio:</label>
            <input class="form-control" type="text" name="price" id="" >
        </div>
        <div class="col-md">
            <label for="">Cantidad:</label>
            <input class="form-control" type="number" name="quantity" id="" >
        </div>
    
<br><br>
       
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">

         
        </div>
    </form>


@endsection
    
