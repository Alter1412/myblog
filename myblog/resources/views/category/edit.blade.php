@extends('layouts.template')

@section('title','Edit')

@section('content')

<h3>Editar Categoria:</h3>

@if ($errors->any())

    <div>
        <h2>Errors:</h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
                
            @endforeach
        </ul>
    </div>
    
@endif
<br>
<br>

<form action="{{route('category.update',$post->id)}}" method="POST">
    @method('PUT')
    @csrf

    <label>
        Titulo:
        <input type="text" name="title" value="{{old('title',$post->title)}}">
    </label>
    <br>
    <br>
    <label>
        Tipo:
        <input type="text" name="type" value="{{old('type',$post->type)}}">
    </label>
    <br>
    <br>
    <label>
        Poster:
        <input type="text" name="poster" value="{{old('poster',$post->poster)}}">
    </label>
    <br>
    <br>
    <label>
        {{--Cambiar de false a true o viceversa--}}
        Habilitado:
        <input type="text" name="Habilitated" value="{{old('Habilitated',$post->Habilitated)}}">
    </label>
    <br>
    <br>
    <label>
        Contenido: <br>
        <textarea name="content" id="" cols="30" rows="10" >{{old('content',$post->content)}}</textarea>
    </label>
    <br>
    <br>
    <button type="submit">Actualizar Post</button>

</form>

@endsection

