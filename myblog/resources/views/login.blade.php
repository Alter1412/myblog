@include('partials.nav')
@extends('layouts.template')

@section('title', 'Test')

@section('content')

<h1>Bienvenido al Login</h1>

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

<form action="" method="POST">
    @csrf
    <input name="email" type="email" required autofocus value="{{old('email')}}" placeholder="email"> 
    <br>
    <input name="password" type="password" required placeholder="password">
    <br>
    <input type="checkbox" name="remember"> Recuerda mi sesion
    <br>
    <button type="submit">Log in</button>
</form>


@endsection