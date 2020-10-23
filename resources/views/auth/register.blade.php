@extends('layouts.app')

@section('content')



<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
               <!-- <div class="card-header">{{ __('Register') }}</div>-->
               <div class="row">
                
        <div class="col-sm-4 col-lg-8 col-md-4 ">
           

                
                      <h1 class="name">Welcome to Cinema Moon</h1>
                    
                
                <link href="{{ asset('css/styles2.css') }}" rel="stylesheet">
                <div align="center" class="alinearCentro">
                    <img class="rounded-circle imagenCard" src="{{ asset('logos/luna.jpg') }}" alt="">
                   </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            
<!--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            -->
                            <div class="col">
                                <input id="name" placeholder="Nombre " type="name"
                                       class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Content</p>
                                </div>
                                <div class="card-footer">
                                    Footer
                                </div>
                            </div>
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            -->
                            <div class="col">
                                <input id="email" placeholder="Dirección de correo electrónico" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            -->
                            <div class="col">
                                        <input id="password" placeholder="Contraseña" type="password"
                                               class="form-control @error('password') is-invalid @enderror" name="password"
                                               value="{{ old('password') }}" required autocomplete="password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>  
                                    
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                           -->
                            <div class="col">
                                <!--
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                -->
                                
                                    <input id="password" placeholder="Confirme contraseña" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           value="{{ old('password') }}" required autocomplete="password" autofocus>

                            
                            </div>
                        </div>

                     <!--   <div class="form-group row mb-0">-->
                            <div class="col-md-4 offset-md-4">
                             <!--   <div class="row.col md-7">-->
                                <button type="submit" class="btn btn-primary col-10">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection