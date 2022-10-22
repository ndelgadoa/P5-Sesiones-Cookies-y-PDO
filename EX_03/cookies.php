<?php
session_start();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $_SESSION['number'] = 0;
}


if ($_SESSION) {
    $_SESSION['number'] += 10;
    echo $_SESSION['number'];
}
?>
