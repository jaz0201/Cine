@extends('layouts.app')


<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



@section('content')

    <div class="col-12">
    @include('layouts.carousel')
    </div>



{{--    <div class="row">--}}
{{--        <div class="col-1 bg-danger">1</div>--}}
{{--        <div class="col-1 bg-dark">2</div>--}}
{{--        <div class="col-1 bg-info">3</div>--}}
{{--        <div class="col-1 bg-primary">4</div>--}}
{{--        <div class="col-1 bg-success">5</div>--}}
{{--        <div class="col-1 bg-secondary">6</div>--}}
{{--        <div class="col-1 bg-success">7</div>--}}
{{--        <div class="col-1 bg-secondary">8</div>--}}
{{--        <div class="col-1 bg-info">9</div>--}}
{{--        <div class="col-1 bg-danger">10</div>--}}
{{--        <div class="col-1 bg-primary">11</div>--}}
{{--        <div class="col-4 bg-info">12</div>--}}
{{--    </div>--}}


<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">The Croods 2</h3>

                <p class="mb-auto">Es una próxima película estadounidense de aventuras y comedia animada...</p>
                <a href="{{ url('/movies') }}" class="stretched-link">   
                <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/1.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Feliz dia de tu muerte 2</h3>
    
                <p class="mb-auto">Tree Gelbman vuelve a entrar en el bucle temporal para averiguar por qué entró la primera vez. ...</p>
                <a href="{{ url('/movies?page=4') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/10.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    
    <div class="col-1"></div>
    
    </div>

<div class="row">

    <div class="col-1"></div>

    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"></strong>
                <h3 class="mb-0 text-uppercase">Pantera Negra</h3>

                <p class="mb-auto">Después de morir su padre, T'Challa regresa a su nación, Wakanda....</p>
                <a href="{{ url('/movies?page=3') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/7.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div
            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0 text-uppercase">Cruella</h3>

                <p class="mb-auto">Cruella es una próxima película estadounidense de crimen, comedia dramática y aventuras ...</p>
                <a href="{{ url('/movies?page=3') }}" class="stretched-link">
                    <button class="btn btn-info btn-sm">Leer más</button>
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ asset('img/8.jpg') }}" width="200px" alt="">
            </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>




<!-- Agregar JavaScript -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@endsection
