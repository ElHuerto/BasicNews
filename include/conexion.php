<?php
$conectar = mysql_connect("servidor", "nombre_usuario", "clave_acceso");
$base_datos = mysql_select_db("nombre_base_datos", $conectar);
?>