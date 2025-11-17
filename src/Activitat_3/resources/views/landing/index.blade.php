@extends('landing.layouts.landing')

@section('title', 'Home')

@section('header')
    <h1> Trotamundos</h1>
@endsection

@section('content')
    <div class="hero">
        <img src="{{ asset('assets/imagenes/portada.jpeg') }}" 
             alt="Portada de Mi Empresa" width="450">
    </div>

    <p>
        Bienvenido a la página principal de nuestra empresa. 
        Ofrecemos diferentes servicios que puedes consultar en la sección "Services".
    </p>
@endsection

