@extends('layouts.template')

@section('title','Show'. $post->title)

@section('content')

<a href="{{ route('category.index') }}">Volver atras</a> {{-- ver con el profe, porque no tendria que andar asi --}}

 {{-- Agregar el if mas adelante para diferenciar entre post habilitado y no habilitados--}}
   
    <br>
    <h1>{{$post->title}}</h1>
    <br>
    <br>
    Categoria: {{$post->type}}
    <br>
    <br>
    Imagen/Posteado por: {{$post->poster}}
    <br>
    <br>
    <p>{{$post->content}}</p>
    <br>

    <a href="{{route('category.edit', $post->id)}}">Editar Post</a>
    <br>
    <br>
  


@endsection
