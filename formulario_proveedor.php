<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Proveedor</title>
</head>
<body>

<?php include 'menu.php';?>


<form action="guardar_proveedor.php" method="POST">

<h2>Formulario Proveedor</h2>

    <br>

<div>
    <label for="">Nombre del proveedor</label>
    <input type="text" name="nombre">
</div>

    <br>

<div>
    <label for="">Descripcion del proveedor</label>
    <input type="text" name="descripcion">
</div>
    <br>
<div>
    <label for="">Telefono del proveedor</label>
    <input type="text" name="telefono">
</div>

    <br>

<div>
    <label for="">Correo del proveedor</label>
    <input type="text" name="correo">
</div>

    <br>
    
<button type="submit">guardar</button>

</form>

</body>
</html>