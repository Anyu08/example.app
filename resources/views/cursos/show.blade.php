<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #a4c9e7;
            color: white;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
        }
        header img {
            max-width: 150px;
            margin-right: 20px;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.2s ease;
        }
        nav a:hover {
            background-color: #555;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .course-image {
    text-align: center; /* Centra el contenido (imagen) horizontalmente */
    margin: 10px auto; /* Margen superior e inferior de 10px, automático a los lados para centrar el contenedor */
    width: 500px; /* Establece el ancho deseado */
    max-width: 800px; /* Ancho máximo */
}

        .course-image img {
            width: 100%;
            max-width: 800px;
            border-radius: 10px;
            text-align: center;
        }
        .form-container {
            background-color: #c0d9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
            border-top: 1px solid #ccc;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        .two-columns {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .left-column {
            flex: 1;
            margin-right: 20px;
        }
        .right-column {
            flex: 1;
        }
        .form-container {
            background-color: #c0d9fa;
            padding: 20px;
            border-radius: 8px;
        }
        .three-columns {
            display: flex;
            justify-content: space-between;
        }
        .column {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
        .footer div {
            flex: 1;
            padding: 10px;
            margin: 0 10px;
        }
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.three-columns {
    display: flex;
    justify-content: space-between;
    margin: 20px;
    padding: 20px;
}

.column {
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    width: 30%;
}

.column h3 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.column p, .column ul {
    color: #34495e;
    line-height: 1.6;
}

.column ul {
    list-style-type: none;
    padding: 0;
}

.column ul li {
    margin: 10px 0;
}

.column ul li a {
    color: #3498db;
    text-decoration: none;
}

.column ul li a:hover {
    text-decoration: underline;
}

footer {
    background-color: #2c3e50;
    color: #ffffff;
    text-align: center;
    padding: 10px;
    margin-top: 20px;
}

footer p {
    margin: 0;
}

    </style>
</head>
<body>

    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Logo de Cursos de Programación">
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#cursos">Cursos</a>
            <a href="#testimonios">Testimonios</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <div class="container">

        <!-- Imagen del curso -->
        <div class="course-image">
            <img src="https://www.fundaciontelefonica.com/wp-content/uploads/2016/07/programacion-730x400.jpg" alt="Curso de Laravel">
        </div>

        <!-- Formulario -->
        <div class="form-container">
            <h2>Inscripción al Curso</h2>
            <form action="#" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">

                <input type="submit" value="Enviar">
            </form>
        </div>

    </div>

   
  <!-- Tres columnas: copy, menú rápido y contacto -->
        <div class="three-columns">
            <div class="column">
                <h3>Copy</h3>
                <p>Aprende a programar con laravel. ¡Instalalo ahora!</p>
            </div>
            <div class="column">
                <h3>Menú Rápido</h3>
                <ul>
                    <li><a href="#curso1">Curso 1</a></li>
                    <li><a href="#curso2">Curso 2</a></li>
                    <li><a href="#curso3">Curso 3</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Contacto</h3>
                <p>Ubicación: Calle 36 123, Ciudad villavicencio</p>
                <p>Teléfono: (123) 456-7890</p>
                <p>Correo: contacto@laravel.com</p>
            </div>
        </div>

    </div>

    <footer>
        <p>&copy; 2024 laravel. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
</body>
</html>


