<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <style>
        html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, sup, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: black;
            text-align: center;
            line-height: 1;
            color: white;
            overflow-x: hidden;
        }

        nav {
            background-color: #000; 
            color: #fff; 
            padding: 15px 20px;
            text-align: left;
            border-bottom: 2px solid #fff; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 4;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #ddd; 
        }

        .spline-background {
            position: relative;
            width: 100vw;
            height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            overflow: hidden;
        }

        .text-overlay {
            font-family: 'Helvetica', sans-serif;
            font-weight: bold;
            font-size: 10vw; 
            color: white;
            z-index: 3;
            position: absolute;
            text-transform: uppercase;
        }

        spline-viewer {
            position: absolute; 
            z-index: 1; 
            width: 100%; 
            height: 100%;
        }

        .contenedor-home, .contenedor-home-dos {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px; 
            padding: 20px;
            margin: 30px 20px;
            background-color: rgba(0, 0, 0, 0.5); 
            border: 2px solid #fff;
            border-radius: 10px;
            backdrop-filter: blur(5px); 
        }

        .hombre, .mujer {
            height: 400px;
            width: 300px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .hombre:hover, .mujer:hover {
            transform: scale(1.05); 
        }

        h1 {
            color: white;
            font-size: 1.5rem;
            text-align: left;
            font-family: 'Helvetica', sans-serif;
            font-weight: bold;
        }

        footer {
            background-color: #000; 
            color: #fff; 
            padding: 20px 0;
            text-align: center;
            border-top: 2px solid #fff; 
            border-bottom: 2px solid #fff;
            position: relative;
            bottom: 0;
            width: 100%;
            z-index: 2;
        }

        .footer-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .footer-container p {
            margin: 5px 0;
        }

        .social-icons {
            margin: 15px 0;
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            color: #fff; 
            font-size: 24px;
            text-decoration: none;
            transition: transform 0.2s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 10px 0;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <div class="nav-logo">OZEZ TRC</div>
        <div class="nav-links">
            <a href="#">Inicio</a>
            <a href="#">Catálogo</a>
            <a href="#">Personalización</a>
            <a href="#">Contacto</a>
        </div>
    </nav>

    <div class="spline-background">
        <div class="text-overlay">OZEZ TRC</div>
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.29/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/5L2ry0JUxSOqzhQZ/scene.splinecode"></spline-viewer>
    </div>
    <main>
        <div class="contenedor-home">
            <img class="hombre" src="/img/hombre2.jpeg" alt="Hombre con camiseta personalizada">
            <h1> Te damos la bienvenida a la página web de OZEZ TRC, donde encontrarás
                una amplia selección de playeras. ¡Explora nuestro catálogo y encuentra tu estilo perfecto hoy mismo!
            </h1>
        </div>
        <div class="contenedor-home-dos">
            <h1> "En nuestra tienda, podrás personalizar tus playeras para que se adapten a tu estilo único. ¡Exprésate como nunca antes!"</h1>
            <img class="mujer" src="/img/mujer.jpeg" alt="Mujer con camiseta personalizada">
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <p>© 2024 OZEZ TRC.</p>
            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
