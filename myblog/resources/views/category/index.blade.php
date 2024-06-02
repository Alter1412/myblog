@extends('layouts.template')

@section('title', 'List Categorys')

@section('content')

<h1>Lista Categorias  </h1>
<br>
<a href="{{route('category.create')}}">Crear Post/Categoria</a>

<ul>
    @foreach ($posts as $post)

    <li>
        <a href="{{route('category.show',$post->id)}}">{{$post->title}}</a>
    </li>
    
    @endforeach

</ul>

{{$posts->links()}}

@endsection


