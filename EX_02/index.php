<?php
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "sinnombre";
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : "sin idioma"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1>Apruebame porfa</h1>
<form action="cookies.php" method="POST" name="formulario">
    <label for="name">Escriba su nombre:
        <input type="text" value= <?php echo $name; ?> placeholder="name:" name="name">
        <input type="text" value= <?php echo $language; ?> placeholder="language:" name="language">



            <input type="submit" value="Enviar">

</form>
</body>
</html>
