@extends('layout')

@section('title','Portfolio')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1 class="display-4">Proyectos</h1>

        @auth

        <a class="btn btn-primary" href="{{route('projects.create')}}">Crear proyecto</a>

        @endauth
    </div>


    <p class="lead text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ab commodi delectussdfdfsdfsdfsdfdsfsfdsfdsfsd.</p>


    <ul class="list-group">
        @forelse ($projects as $item)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center" href="{{route('projects.show', $item) }}">
                    <span class=" font-weight-bold"> {{$item->title}}</span>
                    <span class="text-black-50"> {{$item->created_at->format('d/m/y')}}</span>
                </a>
                {{-- <small>{{$item->description}}</small> --}}
            </li>
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">No hay proyectos para mostrar</li>
        @endforelse

        {{$projects->links()}}
    </ul>
    {{-- @foreach ($portfolio as $port)
        <li>{{$port['title']}}</li>

    @endforeach --}}
</div>

@endsection
