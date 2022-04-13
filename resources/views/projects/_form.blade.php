@csrf

<div class="form-group">
    <label for="title">Titulo del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror"
    id="title"
    name="title"
    type="text"
    placeholder="Ingrese el titulo"
    value="{{ old('title', $project->title)}}">
    @error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror"
    id="url"
    name="url"
    type="text"
    placeholder="Ingrese el url"
    value="{{old('url', $project->url)}}">
    @error('url')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="title"> Descripcion del proyecto</label>
    <input class="form-control bg-light shadow-sm @error('description') is-invalid @else border-0 @enderror"
    id="description"
    name="description"
    type="text"
    placeholder="Ingrese la descripción"
    value="{{old('description', $project->description)}}">
    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }} </strong>
    </span>
    @enderror
</div>



<button class="btn btn-primary btn-lg btn-block" >{{$btnText}}</button>
<a class="btn btn-danger btn-lg btn-block" href="{{route('projects.index')}}">Cancelar</a>
