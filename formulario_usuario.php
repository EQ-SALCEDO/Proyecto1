<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hola</title>
</head>
<body>
    <?php include 'menu.php';?>
    <h2>Usuario</h2>
    <form action="guardar_usuario.php" method="POST">
        <div>
            <label for="">Ingresa el nombre</label>
            <input type="text" name="nombre">
        </div>
            <br>
        <div>
            <label for="">Ingresa el usuario</label>
            <input type="text" name="usuario">
        </div>
            <br>
        <div>
            <label for="">Ingresa el password</label>
            <input type="password" name="password">
        </div>
            <br>
        <button type="submit">enviar</button>
        <button type="reset">limpiar</button>
    </form>
</body>
</html>