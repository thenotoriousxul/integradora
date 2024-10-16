<head>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
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
            font-family: 'Inter', sans-serif;
            background-color: white;
            text-align: center;
            line-height: 1;
            color: black;
            overflow-x: hidden;
        }

        nav {
            background-color: white;
            color: #000;
            padding: 35px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            color: #000;
        }

        .nav-links {
            display: flex;
            gap: 85px;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .nav-links a {
            color: #000;
            text-decoration: none;
            font-size: 20px;
            font-weight: lighter;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-links a:hover {
            color: black;
            transform: translateY(-5px);
        }

        .icon-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cart-icon {
            font-size: 1.5rem;
            color: #000;
            cursor: pointer;
            transition: transform 0.5s ease;
        }

        .cart-icon:hover {
            transform: rotate(360deg);
        }

        .user-icon {
            font-size: 1.5rem;
            color: #000;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .user-icon:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<nav>
    <div class="nav-logo">OZEZ</div>
    <div class="nav-links">
        <a href="#">Inicio</a>
        <a href="#">Catálogo</a>
        <a href="#">Personalización</a>
        <a href="#">Contacto</a>
    </div>
    <div class="icon-container">
        <i class="mdi mdi-account user-icon"></i>
        <i class="mdi mdi-cart cart-icon"></i>
    </div>
</nav>
</body>
