<?php 

//Hacer la conexion
include 'conexion.php';

//Recibir los valores del formulario
$nombre = $_POST ['nombre'];
$descripcion =$POST ['descripcion'];
$telefono =$_POST ['telefono'];
$correo =$_POST ['correo'];

$proveedor = "INSERT proveedor (nombre, descripcion, telefono, correo)
VALUES ('$nombre', '$descripcion', '$telefono', '$correo')";

// Ejecutamos la consulta 
if ($conn->query($proveedor) === TRUE) {
    // Si se guarda correctamente, mostramos una alerta y redireccionamos al formulario
    echo "<script>
            alert('Registro guardado correctamente.');
            window.location.href = 'formulario_proveedor.php';
          </script>";
} else {
    // Si hay un error, mostramos una alerta con el mensaje de error
    echo "<script>
            alert('Error al guardar: " . $conn->error . "');
            window.location.href = 'formulario_proveedor.php';
          </script>";
}

$conn->close(); // Cerramos la conexión 


?>