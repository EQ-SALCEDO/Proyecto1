<?php 
//Mandar a llamar a conexion
include 'conexion.php';

//Recibir los valores del formulario
$Nombre = $_POST ['nombre'];
$Usuario = $_POST ['usuario'];
$Password = $_POST ['password'];

//Preparar la consulta sql
$Usuario_sql ="INSERT INTO usuario (usuario, password, nombre)
VALUES ('$Usuario', '$Password', '$Nombre')";

// Ejecutamos la consulta 
if ($conn->query($Usuario_sql) === TRUE) {
    // Si se guarda correctamente, mostramos una alerta y redireccionamos al formulario
    echo "<script>
            alert('Registro guardado correctamente.');
            window.location.href = 'formulario_usuario.php';
          </script>";
} else {
    // Si hay un error, mostramos una alerta con el mensaje de error
    echo "<script>
            alert('Error al guardar: " . $conn->error . "');
            window.location.href = 'formulario_usuario.php';
          </script>";
}

$conn->close(); // Cerramos la conexión 

?>