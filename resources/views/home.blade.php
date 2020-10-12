@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Cinema Moon') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="Enjoy your stay">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in, Enjoy your stay!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
