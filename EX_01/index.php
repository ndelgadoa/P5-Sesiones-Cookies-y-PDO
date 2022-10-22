<?php
if ( isset( $_COOKIE[ 'visitas' ] ) ) {

    setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
    $msg = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
}
else {

    setcookie( 'visitas', 1, time() + 3600 * 24 );
    $msg = 'Primera vez';
}

?>
<html>
<head>
    <title>Cookie</title>
</head>
<body>
<p>
<?php echo $msg;?>
</p>
</body>
</html>
