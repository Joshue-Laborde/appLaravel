@extends('layout')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4">
            <h1 class="display-4 text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, vitae. Delectus, ut? Consectetur nulla tenetur, cupiditate dolorem repudiandae distinctio, corporis minima ipsam, officia ea provident vel in modi totam velit!</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-responsive mb-4 mx-auto d-block" src="/img/home1.svg" alt="Desarrollo web" width="500" height="450">
        </div>
    </div>
</div>
{{-- <h1>Inicio</h1>

@auth
    {{auth()->user()->name}}
@endauth --}}
@endsection
