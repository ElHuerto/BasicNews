<?php
     if (isset($_REQUEST['enviar'])) {
	 if (!empty($_REQUEST['servidor']) && !empty($_REQUEST['usuario']) && !empty($_REQUEST['contrasena']) && isset($_REQUEST['nombre'])){
	 	 $servidor = $_POST['servidor'];
	 $usuario = $_POST['usuario'];
	 $contrasena = $_POST['contrasena'];
	 $nombre = $_POST['nombre'];
	 $conectar = mysql_connect($servidor, $usuario, $contrasena)or die("Fallo la conexion a la BD: ".mysql_error());
	 	 $seleccionar_bd = mysql_select_db($nombre, $conectar)or die("Fallo la seleccion de la BD: ".mysql_error());
	 $crear_tablas_not = mysql_query("CREATE TABLE IF NOT EXISTS not_bn (
  ID int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  email varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  noticia text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  fecha varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  hora varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  categoria varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;", $conectar)or die("Fallo la creacion de tablas: ".mysql_error());
	 $crear_tablas_cat = mysql_query("CREATE TABLE IF NOT EXISTS cat_bn (
  ID int(11) NOT NULL AUTO_INCREMENT,
  categoria varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;", $conectar)or die("Fallo la creacion de tablas: ".mysql_error());
	 if ($crear_tablas_not = TRUE && $crear_tablas_cat = TRUE) {
		echo "Tablas creadas correctamente<br>Ahora, añade tus datos de conexion en el archivo BasicNews/include/conexion.php abriendolo con cualquier editor de codigo.";
	 }else{
	 echo "Hubo un error al crear las tablas, comprueba que no exista ya la tabla especificada! <b>Busca por not_bn</b><br>";
	 }
	 }else{
	 echo "Rellena todos los campos!<br>";
	 }
	 }
?>

<h1>Instalacion de BasicNews</h1>
Rellena los siguientes campos con los datos de conexion de tu base de datos para crear las tablas :)<p>
<form name="instalacion" method="post" action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off">
Servidor Base de datos:<br>
<input type="text" name="servidor" /><p>
Usuario Base de datos:<br>
<input type="text" name="usuario" /><p>
Contraseña Base de datos:<br>
<input type="password" name="contrasena" /><p>
Nombre Base de datos:<br>
<input type="text" name="nombre" /><p>
<input type="submit" value="enviar" name="enviar" /> 
</form>