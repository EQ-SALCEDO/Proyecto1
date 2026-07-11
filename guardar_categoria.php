<?php 
//mandar a llamar el archivo conexion
include 'conexion.php';

//recibir los valores del formulario
$categoria =$_POST['categoria'];

//preparar la consulta sql para procesar los datos 
$consulta ="INSERT INTO categoria (nombre)
VALUES ('$categoria')";

// Ejecutamos la consulta 
if ($conn->query($consulta) === TRUE) {
    // Si se guarda correctamente, mostramos una alerta y redireccionamos al formulario
    echo "<script>
            alert('Registro guardado correctamente.');
            window.location.href = 'formulario.php';
          </script>";
} else {
    // Si hay un error, mostramos una alerta con el mensaje de error
    echo "<script>
            alert('Error al guardar: " . $conn->error . "');
            window.location.href = 'formulario.php';
          </script>";
}

$conn->close(); // Cerramos la conexión

?>