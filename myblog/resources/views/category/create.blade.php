@extends('layouts.template')

@section('title','Create')

@section('content')

<h1>Crear Categoria:</h1>

{{-- @if ($errors->any())

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
    
@endif --}}

<br>
<br>

<form action="{{route('category.store')}}" method="POST">

    @csrf

    <label>
        Titulo:
        <input type="text" name="title" value="{{old('title')}}">
    </label>

    @error('title')
        <p>{{$message}}</p>
    @enderror

    <br>
    <br>
    <label>
        Tipo:
        <input type="text" name="type" value="{{old('type')}}">
    </label>

    @error('type')
        <p>{{$message}}</p>
     @enderror

    <br>
    <br>
    <label>
        Poster:
        <input type="text" name="poster" value="{{old('poster')}}">
    </label>

    @error('poster')
        <p>{{$message}}</p>
    @enderror

    <br>
    <br>
    <label>
        Contenido: <br>
        <textarea name="content" id="" cols="30" rows="10" >{{old('content')}}</textarea>
    </label>

    @error('content')
        <p>{{$message}}</p>
    @enderror

    <br>
    <br>
    <button type="submit">Crear Post</button>

</form>

@endsection

