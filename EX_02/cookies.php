<?php
$name = $_POST['name'];
$language = $_POST['language'];

setcookie("name",$name,time() + 3600, '/');
setcookie("language",$language,time() + 3600, '/');

?>
