@props(['title', 'image', 'price', 'days', 'url'])

<div class="card">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset

    @isset($image)
        <img src="{{ asset('assets/imagenes/' . $image) }}" 
             alt="Imagen de {{ $title }}" 
             class="card-image">
    @endisset

    <p class="card-meta">
        <strong>Precio:</strong> {{ $price }}<br>
        <strong>Duración:</strong> {{ $days }} días
    </p>

    <div class="card-description">
        {{ $slot }}
    </div>

    @isset($url)
        <a href="{{ $url }}" class="card-button" target="_blank" rel="noopener noreferrer">
            Más info de la ciudad
        </a>
    @endisset
</div>


