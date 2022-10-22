<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1>Apruebame porfa</h1>
<form action="cookies.php" method="POST" name="formulario">
    <label for="name">Escriba su nombre:
        <input type="text" placeholder="name:" name="name">
        <input type="submit" value="Enviar">

</form>
</body>
</html>
