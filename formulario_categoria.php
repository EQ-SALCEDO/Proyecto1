<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>categoria</title>
</head>

<body>
    
<?php include 'menu.php';?>

<h2>Categoria</h2>

<form action="guardar_categoria.php" method="POST">


<label for="">Ingresa nombre de la categoria</label>
<input type="text" name="categoria">
<br>
<button type="submit">Guardar categoria</button>

</form>

</body>
</html>