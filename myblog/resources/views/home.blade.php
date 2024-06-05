@extends('layouts.template')

@section('title', 'Home')

@section('content')

<h1>Bienvenido </h1>

<a href="{{route('category.index')}}">Ir a lista de Categorias</a>
{{--mover este link al dashboard--}}

@endsection

