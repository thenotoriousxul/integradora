<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'OZEZ - Tienda de Playeras')</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cartS.css') }}">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, .bebas {
            font-family: 'Bebas Neue', cursive;
        }
    </style>
</head>
<body>
    @section('content')
    <br>
    <main class="container">
        <div class="cart-header">
            <h2>Tus Productos</h2>
            <a href="#" class="back-link">Volver a la tienda</a>
        </div>

        <div class="cart-content">
            <table>
                <thead>
                <tr>
                    <th>PRODUCTO</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="{{ asset('img/pull.jpg') }}" alt="playera 1" width="100" height="100">
                            <div>
                                <p class="product-name">Playera Edición Verano</p>
                                <p class="product-size">Size: M</p>
                            </div>
                        </div>
                    </td>
                    <td class="price">$500.00</td>
                    <td>
                        <div class="quantity-selector">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-btn plus">+</button>
                        </div>
                    </td>
                    <td class="total">$500.00</td>
                </tr>

                <!-- Otro producto -->
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="{{ asset('img/image.png') }}" alt="playera 2" width="100" height="100">
                            <div>
                                <p class="product-name">Playera Edición Invierno</p>
                                <p class="product-size">Size: M</p>
                            </div>
                        </div>
                    </td>
                    <td class="price">$500.00</td>
                    <td>
                        <div class="quantity-selector">
                            <button class="quantity-btn minus">-</button>
                            <input type="number" value="1" min="1" class="quantity-input">
                            <button class="quantity-btn plus">+</button>
                        </div>
                    </td>
                    <td class="total">$500.00</td>
                </tr>
                </tbody>
            </table>

            <div class="privacy-policy">
                <input type="checkbox" id="privacy-checkbox">
                <label for="privacy-checkbox">
                    He leído el <a href="#">Aviso de Privacidad</a>
                </label>
            </div>

            <div class="cart-summary">
                <p class="subtotal">Subtotal: $500.00 MXN</p>
                <p class="tax-info">Impuestos incluidos y envío calculado al momento de pagar</p>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('js/carro.js') }}"></script>
@endsection

@include('partials.nav')
<div class="content">
    @yield('content')
</div>
@include('partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
