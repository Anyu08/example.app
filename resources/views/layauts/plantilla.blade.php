<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--styles-->
    <style>
        /* Estilo general */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header, footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        /* Encabezado */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img {
            height: 80px; /* Ajusta la altura de la imagen del logo */
        }
        .menu {
            font-size: 1.2em;
        }

        /* Imagen principal */
        .imagen {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }
        .imagen img {
            width: 50%;
            border-radius: 20px;
        }

        /* Sección de imágenes */
        .section {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .section div {
            background-color: #fff;
            padding: 20px;
            flex: 1;
            margin: 0 10px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .section div img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .section div:hover {
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        /* Imagen y texto */
        .img-texto {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
            padding-right: 90px;
        }

        .img-texto .img {
            width: 50%;
            padding-right: 20px;
        }

        .img-texto .img img {
            width: 100%;
            border-radius: 8px;
        }

        .texto {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .texto ul {
            list-style-type: none;
            padding: 0;
        }

        .texto ul li {
            background-color: #f0f0f0;
            margin: 10px 0;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
        }

        /* Testimonios */
        .testimonio {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.2em;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            padding-top: 20px;
        }

        .footer div {
            flex: 1;
            padding: 10px;
            margin: 0 10px;
        }

        .copy, .ubicacion {
            font-size: 1em;
        }
    </style>
</head>
<body>

    <header>
        <div class="container header">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Logo"> 
            </div>
            <div class="menu">Menú</div>
        </div>
    </header>

    <section>
        <div class="container imagen">
            <img src="https://www.laravel-entwickler.de/wp-content/uploads/2023/01/Laravel.jpg" alt="Imagen principal"> 
        </div>
    </section>

    <section class="container section">
        <div class="img-cit">
            <img src="https://i.ytimg.com/vi/7TKY-jksHRQ/maxresdefault.jpg" alt="Imagen cit">
            <p>Descripción de la imagen cit</p>
        </div>
        <div class="img-load">
            <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2022/09/curso-programacion-udemy-2829849.jpg?tf=3840x" alt="Imagen load">
            <p>Descripción de la imagen load</p>
        </div>
        <div class="img-bt">
            <img src="https://www.azulweb.net/wp-content/uploads/2019/06/Cursos-Gratuitos-De-Programaci%C3%B3n-800x425.png" alt="Imagen bt">
            <p>Descripción de la imagen bt</p>
        </div>
    </section>

 
        </div>
        <div class="texto">
            <ul>
                <li>Cosas para estudiar aquí</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container testimonio">
            <p>Aquí va un testimonio. Puedes escribir cualquier cosa.</p>
        </div>
    </section>

    <footer>
        <div class="container footer">
            <div class="copy">Copy &copy; 2024 Laravel. Todos los derechos reservados.</div>
            <div class="ubicacion">Ubicación: Calle 36 123, Ciudad Villavicencio</div>
            <div class="ubicacion">Teléfono: (123) 456-7890</div>
        </div>
    </footer>

</body>
</html>

       