<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ozez- Tu carrito</title>
    <link rel="stylesheet" href="{{ asset('css/estilos_carrito.css')}}">
</head>
<body>
@include('partials.nav')
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
                                <img src="{{asset('img/pull.jpg')}}" alt="playera 1" width="100" height="100">
                                <div>
                                    <p class="product-name">Playera Edicion Verano</p>
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

                    <!--  -->
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{asset('img/image.png')}}" alt="playera 1" width="100" height="100">
                                <div>
                                    <p class="product-name">Playera Edicion Invierno</p>
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

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Ayuda</h3>
                    <a href="#">Contacto</a>
                    <a href="#">Envíos</a>
                    <a href="#">Devoluciones</a>
                </div>
                <div class="footer-column">
                    <h3>Acerca de</h3>
                    <a href="#">Nuestra historia</a>
                    <a href="#">Tiendas</a>
                    <a href="#">Trabaja con nosotros</a>
                </div>
                <div class="footer-column">
                    <h3>Legal</h3>
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 OZEZ. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="carro.js"></script>
</body>
</html>
