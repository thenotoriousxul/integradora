@extends('layout')

@section('title', 'Bienvenido a OZEZ')

<style>
    .preload-images {
        visibility: hidden;
        position: absolute;
        width: 0;
        height: 0;
        overflow: hidden;
    }

    .contenedor {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        height: 100vh;
        width: 100%;
        overflow: hidden;
        background-image: url('img/byn.jpeg');
        background-size: cover;
        background-position: center;
        transition: background-image 0.5s ease;
    }

    .contenedor:hover {
        background-image: url('img/playera.jpeg');
    }

    .contenedor::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(128, 128, 128, 0.4);
        z-index: 1;
    }

    .texto {
        color: white;
        font-size: 50px;
        font-family: 'Helvetica', sans-serif;
        font-weight: bold;
        text-align: center;
        white-space: pre-wrap;
        overflow: hidden;
        padding: 10px;
        z-index: 2;
        animation: escribir 1s steps(30) 1 normal both;
    }

    h1 {
        font-family: 'Bebas Neue', cursive;
        font-size: 36px;
        margin: 0 0 0 15px;
        color: #fff;
        letter-spacing: 2px;
    }

    .titulo {
        font-family: 'Bebas Neue', cursive;
        font-size: 90px;
        color: #fff;
    }

    @keyframes escribir {
        from { width: 0; }
        to { width: 100%; }
    }

</style>

@section('content')
    <div class="contenedor">
        <div class="texto">
            <h1 class="titulo">Estilo y comodidad en cada prenda.</h1>
        </div>
    </div>

    <div class="preload-images">
        <img src="{{ asset('img/byn.jpeg') }}" alt="Pre-cargar imagen original">
        <img src="{{ asset('img/playera.jpeg') }}" alt="Pre-cargar imagen hover">
    </div>
@endsection

@section('scripts')
@endsection
