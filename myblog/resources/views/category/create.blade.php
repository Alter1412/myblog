@extends('layouts.template')

@section('title','Create')

@section('content')

Crear Categoria:
<br>
<br>

<form action="/pwa-tp3/myblog/myblog/public/category" method="POST">

    @csrf

    <label>
        Titulo:
        <input type="text" name="title">
    </label>
    <br>
    <br>
    <label>
        Tipo:
        <input type="text" name="type">
    </label>
    <br>
    <br>
    <label>
        Poster:
        <input type="text" name="poster">
    </label>
    <br>
    <br>
    <label>
        Contenido: <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    </label>
    <br>
    <br>
    <button type="submit">Crear Post</button>

</form>

@endsection

