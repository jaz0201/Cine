@extends('layouts.app')
@section('content')

    <form action="{{ route('rooms.update', $room->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-md">
                <label for="">Asiento:</label>
                <input value="{{ $room->chairs }}" class="form-control" type="tinyInteger" name="chairs" id="">
            </div>
            <div class="col-md">
                <label for="">Locacion:</label>
                <input value="{{ $room->location }}" class="form-control" type="string" name="location" id="">
            </div>
            <div class="col-md">
                <label for="">Capacidad:</label>
                <input value="{{ $room->capacity }}" class="form-control" type="tinyInteger" name="capacity" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>

    </form>

@endsection