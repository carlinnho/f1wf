<?php
session_start();
echo "prueba";
session_unset();
header("location: ../index.php");
?>