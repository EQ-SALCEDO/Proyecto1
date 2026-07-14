<?php 
//Mandar a llamar a conexion
include 'conexion.php';

//Recibir los valores del formulario
$Nombre = $_POST ['nombre'];
$Telefono = $_POST ['telefono'];
$Correo = $_POST ['correo'];

//Preparar la consulta sql
$Cliente ="INSERT INTO cliente (nombre, telefono, correo)
VALUES ('$Nombre', '$Telefono', '$Correo')";

// Ejecutamos la consulta 
if ($conn->query($Cliente) === TRUE) {
    // Si se guarda correctamente, mostramos una alerta y redireccionamos al formulario
    echo "<script>
            alert('Registro guardado correctamente.');
            window.location.href = 'formulario_cliente.php';
          </script>";
} else {
    // Si hay un error, mostramos una alerta con el mensaje de error
    echo "<script>
            alert('Error al guardar: " . $conn->error . "');
            window.location.href = 'formulario_cliente.php';
          </script>";
}

$conn->close(); // Cerramos la conexión 

?>