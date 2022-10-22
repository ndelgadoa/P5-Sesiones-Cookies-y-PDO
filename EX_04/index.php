<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$resultados = $conexion->query("CREATE TABLE ndelgadoa5_users (
    Usuario varchar(255),
    correo varchar(255) PRIMARY KEY ,
    contrasena varchar(255),
    nacimiento date,
    Admin BOOLEAN,
    Imagen TEXT
)");
$resultados = $conexion->query('INSERT INTO ndelgadoa5_users VALUES(usuario, correo, contrasena, nacimiento, admin, imagen)');
values ('Nil','nil@analada.com','juanmagan',2002-04-29,TRUE,'si');



?>
