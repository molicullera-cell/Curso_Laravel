@extends('landing.layouts.landing')

@section('title', 'Services')

@section('header')
    <h1>Viajes destacados</h1>
@endsection

@section('content')
    <div class="cards-container">
        <x-card 
            title="París" 
            image="paris.jpg" 
            price="499 €" 
            days="3"
            url="https://www.paris.fr/">
            <p>Descubre la ciudad del amor, la Torre Eiffel y el Louvre en una escapada inolvidable.</p>
        </x-card>

        <x-card 
            title="Londres" 
            image="londres.jpg" 
            price="550 €" 
            days="4"
            url="https://www.visitlondon.com/">
            <p>Pasea por el Támesis, visita el Big Ben y explora los míticos barrios londinenses.</p>
        </x-card>

        <x-card 
            title="Roma" 
            image="roma.jpg" 
            price="480 €" 
            days="3"
            url="https://www.turismoroma.it/">
            <p>Viaja al corazón del Imperio Romano y disfruta de su historia, arte y gastronomía.</p>
        </x-card>
    </div>
@endsection


