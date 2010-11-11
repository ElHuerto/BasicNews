<?php
echo "<h3>Categorías</h3>";
$categorias_sel = mysql_query("SELECT * from cat_bn", $conectar)or die("Fallo el Select: ".mysql_error());
while($cat = mysql_fetch_array($categorias_sel)){
echo "<a href='index.php?cat=".$cat['categoria']."&amp;id=".$cat['ID']."'>".$cat['categoria']."</a><br>";
}
?>