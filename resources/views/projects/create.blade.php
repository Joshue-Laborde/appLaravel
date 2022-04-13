@extends('layout')

@section('title','Crear proyecto')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">

                <form class="bg-white shadow rounded py-3 px-4" action="{{route('projects.store')}}" method="post">
                    <h1 class="display-4">Crear nuevo Proyecto</h1>
                    <hr>
                    @include('projects._form', ['btnText'=> 'Guardar'])

                </form>
            </div>
        </div>
    </div>

@endsection
