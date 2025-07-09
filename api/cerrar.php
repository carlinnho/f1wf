<?php
session_start();
echo "prueba";
session_unset();
header("location: ../public/index.php");
?>