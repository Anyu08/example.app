<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cursos de Programación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
        }
        header img {
            max-width: 150px;
        }
        nav {
            background-color: #333;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .course-image {
            text-align: center;
            margin: 20px 0;
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
            background-color: #f9f9f9;
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
    </style>
</head>
<body>

    <header>
        <img src="logo.png" alt="Logo de Cursos de Programación">
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
            <img src="curso.jpg" alt="Curso de Programación" style="width:100%; max-width:800px;">
        </div>

        <!-- Dos columnas: imagen y formulario -->
        <div class="two-columns">
            <div class="left-column">
                <img src="imagen-izquierda.jpg" alt="Imagen Izquierda" style="width:100%; border-radius: 8px;">
            </div>
            <div class="right-column form-container">
                <h2>Formulario de Inscripción</h2>
                <form>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="telefono">Teléfono:</label><br>
                    <input type="tel" id="telefono" name="telefono" required><br><br>
                    <input type="submit" value="Inscribirme">
                </form>
            </div>
        </div>

        <!-- Tres columnas: copy, menú rápido y contacto -->
        <div class="three-columns">
            <div class="column">
                <h3>Copy</h3>
                <p>Aprende a programar con los mejores cursos. ¡Inscríbete ahora!</p>
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
                <p>Ubicación: Calle Falsa 123, Ciudad Futura</p>
                <p>Teléfono: (123) 456-7890</p>
                <p>Correo: contacto@cursosprogramacion.com</p>
            </div>
        </div>

    </div>

    <footer>
        <p>&copy; 2024 Cursos de Programación. Todos los derechos reservados.</p>
    </footer>

</body>
</html>