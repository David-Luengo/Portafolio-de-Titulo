<?php
// Datos de la conexión a la base de datos
$host = "localhost";
$port = "5432";
$dbname = "Proyecto_Titulo";
$user = "postgres";
$password = "123456";

// Crear la conexión a la base de datos
$connection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Verificar la conexión
if (!$connection) {
    die("Error: No se pudo conectar a la base de datos.");
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Insertar los datos en la tabla administrador
$query = "INSERT INTO public.'Administrador' (nombre, apellido, correo, contraseña) VALUES ('$nombre', '$apellido', '$correo', '$contraseña')";

// Ejecutar la consulta
$result = pg_query($connection, $query);

// Verificar si la inserción fue exitosa
if ($result) {
    echo "Registro exitoso.";
    // Redirigir a una página de confirmación o a la página de inicio de sesión
    header("Location: login.html");
} else {
    echo "Error: No se pudo registrar la información.";
}

// Cerrar la conexión
pg_close($connection);
?>
