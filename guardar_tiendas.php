<?php 

include 'conexion.php';

$nombre = $_POST ['nombre'];
$descripcion = $_POST ['descripcion'];
$direccion = $_POST ['direccion'];

$tiendas = "INSERT tiendas (nombre, descripcion, direccion)
VALUES ('$nombre', '$descripcion', '$direccion')";

// Ejecutamos la consulta 
if ($conn->query($tiendas) === TRUE) {
    // Si se guarda correctamente, mostramos una alerta y redireccionamos al formulario
    echo "<script>
            alert('Registro guardado correctamente.');
            window.location.href = 'formulario_tiendas.php';
          </script>";
} else {
    // Si hay un error, mostramos una alerta con el mensaje de error
    echo "<script>
            alert('Error al guardar: " . $conn->error . "');
            window.location.href = 'formulario_tiendas.php';
          </script>";
}

$conn->close(); // Cerramos la conexión 

?>