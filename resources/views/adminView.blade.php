@extends('layouts.app')
@section('content')

    <h1>Hola administrador !!!</h1>

    <button class="botonCuadrado" id="elLugar">Lugar</button>
    <button class="botonCuadrado" id="elArticulo" type="button" onclick="window.location='{{ url("articles") }}'">Articules</button>
    <button class="botonCuadrado" id="losEventos" type="button" onclick="window.location='{{ url("events") }}'">Eventos</button>
    <button class="botonCuadrado" id="laDefinicion" type="button" onclick="window.location='{{ ("post.index") }}'">Definición</button>
    <button class="botonCuadrado" id="crearAdmin" type="button" onclick="window.location='{{ url("userAdmin") }}'">Crea Admin</button>
@endsection
