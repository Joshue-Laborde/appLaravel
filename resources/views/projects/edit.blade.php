@extends('layout')

@section('title','Crear proyecto')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">

                <form class="bg-white shadow rounded py-3 px-4" action="{{route('projects.update', $project)}}" method="post">
                    @method('PATCH')
                    <h1 class="display-4">Editar Proyecto</h1>
                    <hr>
                    @include('projects._form', ['btnText'=> 'Actualizar'])

                </form>
            </div>
        </div>
    </div>

@endsection
