<a href="/">Inicio</a>
{{--@guest muestra el link loging a aquellos que no hallan iniciado sesion
    @auth hace lo contrario, muestra los links que queremos que vea un user logeado
--}}
@guest
  <a href="/login">Login</a> 
@else
    <a href="/dashboard">Dashboard</a>

    <form style="display:inline" action="/logout" method="POST">
        @csrf
        <a href="#"  onclick="this.closest('form').submit()">Logout</a>
    </form>

@endguest

@if (session('status'))

<br>
{{session('status')}}
    
@endif
