<?php
if(isset($_GET['cat']) && $_GET['id']){
$ID_categoria = $_GET['id'];
$where = "WHERE categoria = '$ID_categoria'";
}else{
$where = "";
}
$select_noticias = mysql_query("SELECT * from not_bn $where order by ID DESC", $conectar)or die("Fallo el select: ".mysql_error());
?>