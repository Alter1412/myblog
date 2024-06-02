@extends('layouts.template')

@section('title','Edit')

@section('content')

<h3>Editar Categoria:</h3>
<br>
<br>

<form action="{{route('category.update',$post->id)}}" method="POST">
    @method('PUT')
    @csrf

    <label>
        Titulo:
        <input type="text" name="title" value="{{$post->title}}">
    </label>
    <br>
    <br>
    <label>
        Tipo:
        <input type="text" name="type" value="{{$post->type}}">
    </label>
    <br>
    <br>
    <label>
        Poster:
        <input type="text" name="poster" value="{{$post->poster}}">
    </label>
    <br>
    <br>
    <label>
        Contenido: <br>
        <textarea name="content" id="" cols="30" rows="10" >{{$post->content}}</textarea>
    </label>
    <br>
    <br>
    <button type="submit">Actualizar Post</button>

</form>

@endsection

