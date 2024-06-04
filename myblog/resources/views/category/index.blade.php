@extends('layouts.template')

@section('title', 'List Categorys')

@section('content')

<h1>Lista Categorias  </h1>
<a href="{{route('home')}}">Volver a Home</a>
<br>
<br>
<a href="{{route('category.create')}}">Crear Post/Categoria</a>

<ul>
    @foreach ($posts as $post)
        @if ($post->Habilitated )
            <li>
                <a href="{{route('category.show',$post->id)}}">{{$post->title}}</a>
            {{--ver si al crear un enlace con $post->id como botones redirecciona a la pagina edit o lo borra 
                directamente--}}
            </li>
        @endif
    
    @endforeach

</ul>

{{$posts->links()}}

@endsection


