@extends('layouts.app')
@section('content')

    <form action="{{ route('entrances.update', $entrance->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-md">
                <label for="">Sala:</label>
                <input value="{{ $entrance->room }}" class="form-control" type="string" name="room" id="">
            </div>
            <div class="col-md">
                <label for="">Precio:</label>
                <input value="{{ $entrance->price }}" class="form-control" type="float" name="price" id="">
            </div>
            <div class="col-md">
                <label for="">Hora:</label>
                <input value="{{ $entrance->hour }}" class="form-control" type="timeTz" name="hour" id="">
            </div>

        </div>
        <br><br>
        <div class="text-center">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>

    </form>

@endsection