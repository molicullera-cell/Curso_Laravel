@extends('landing.layouts.landing')

@section('title', 'Contact')

@section('header')
    <h1>Contacto</h1>
@endsection

@section('content')
    <div class="contact-page">

        {{-- Mapa estático --}}
        <div class="contact-map">
            <img src="{{ asset('assets/imagenes/mapa.jpeg') }}" 
                 alt="Mapa de ubicación de la empresa">
        </div>

        {{-- Datos de contacto --}}
        <div class="contact-data">
            <h2>Datos de contacto</h2>
            <p><strong>Teléfono:</strong> 
                <a href="tel:+34961111222">+34 961 111 122</a>
            </p>
            <p><strong>Email:</strong> 
                <a href="mailto:info@miempresa.com">info@miempresa.com</a>
            </p>
            <p><strong>Dirección:</strong><br>
                C/ Ejemplo 123,<br>
                46000 Valencia,<br>
                España
            </p>
        </div>
    </div>
@endsection
