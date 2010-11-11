<?php
// Funcion de los BBCodes, reemplaza algunos codigos HTML por BBCode
function bbcode($text){ 
   $a = array( 
      "/\[i\](.*?)\[\/i\]/is", 
      "/\[b\](.*?)\[\/b\]/is", 
      "/\[u\](.*?)\[\/u\]/is", 
	  "/\[s\](.*?)\[\/s\]/is",
	  "/\[center\](.*?)\[\/center\]/is",
	  "/\[align=left\](.*?)\[\/align\]/is",
	  "/\[align=right\](.*?)\[\/align\]/is",
      "/\[img\](.*?)\[\/img\]/is", 
	  "/\[img=(.*?)\]/is", 
      "/\[youtube\](.*?)\[\/youtube\]/is", 
      "/\[url=(.*?)\](.*?)\[\/url\]/is",
	  "/\[url\](.*?)\[\/url\]/is",
	  "/\[quote\](.*?)\[\/quote\]/is",
	  "/\[code\](.*?)\[\/code\]/is"
   ); 
   $b = array( 
      "<i>$1</i>", 
      "<b>$1</b>", 
      "<u>$1</u>", 
	  "<strike>$1</strike>",
	  "<p align=\"center\">$1</p>",
	  "<p align=\"left\">$1</p>",
	  "<p align=\"right\">$1</p>",
      "<img src=\"$1\" />", 
	  "<img src=\"$1\" />", 
	  "<object width=\"425\" height=\"344\"><param name=\"movie\" value=\"$1\"></param><param name=\"allowFullScreen\" value=\"true\"></param><param name=\"allowscriptaccess\" value=\"always\"></param><embed src=\"$1\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"425\" height=\"344\"></embed></object>", 

      	"<a href=\"$1\" target=\"_blank\">$2</a>",
      	"<a href=\"$1\" target=\"_blank\">$1</a>",
		"<div class=\"textoCita\">Cita:\n<div class=\"cita\">$1</div></div>",
		"<div class=\"textoCodigo\">C&oacute;digo:\n<div class=\"codigo\">$1</div></div>"
   ); 
   $text = str_replace("<br \>","\n",$text);
   $text = preg_replace($a, $b, $text); 
   $text = str_replace("watch?v=","v/",$text);
   return $text; 
} 
?>