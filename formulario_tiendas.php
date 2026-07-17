<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tiendas</title>
</head>
<body>
    
<?php include 'menu.php'; ?>

<form action="guardar_tiendas.php" method = 'POST'>

<div>
    <label for="">nombre de la tienda</label>
    <input type="text" name = "nombre">
</div>

<div>
    <label for="">descripcion de la tienda</label>
    <input type="text" name = "descripcion">
</div>

<div>
    <label for="">direccion de la tienda</label>
    <input type="text" name = "direccion">
</div>

<button type="submmit">guardar</button>

</form>

</body>
</html>