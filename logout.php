<?php
/*
Si existe la sesion, la destruye! 
*/
session_start();
session_destroy();
header("Location: index.php");
?>
