@include('partials.nav')
@extends('layouts.template')

@section('title', 'Home')

@section('content')

<h1>Bienvenido a la Registracion </h1>

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

<form action="{{route('store')}}" method="POST">
    @csrf
    <input name="name" type="text" placeholder="name" autofocus required value="{{old('name')}}">
    <br>
    <input name="email" type="email" required  value="{{old('email')}}" placeholder="email"> 
    <br>
    <input name="password" type="password" required placeholder="password">
    <br>
    <button type="submit">Register</button>
</form>

@endsection