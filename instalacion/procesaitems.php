<?php 
/*
 *    
 *      Copyright 2009 Antonio Gomez Garcia <agomeztron@yahoo.es>
 *      
 * Este programa es software libre; lo puedes redistribuir y/o modificar
 * bajo los terminos de la licencia publica GNU, publicada por la Free 
 * Software Foundation; ya sea la version 2 de la licencia, o cualquier 
 * version posterior.
 * 
 * Este programa se esta distribuyendo con la esperanza de que sea util 
 * a la comunidad, pero SIN NINGUNA GARANTIA, ¡RECLAMACIONES, AL MAESTRO 
 * ARMERO!, que decian en la mili. Si te quedas con la duda, examina los
 * terminos de la licencia GNU
 * 
 * Deberias haber recibido una copia de la Licencia Publica General GNU 
 * junto con esta aplicacion. Si no es asi, y te da pereza tirar de In-
 * ternet, escribe a: Free Software Foundation, Inc., 51 Franklin Street
 * , Fifth Floor, Boston, MA 02110-1301,USA.
 * 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
   include("conectarse.php");
   $link=Conectarse();
   $usuario=$_POST['usuario'];
   $contra=$_POST['contra'];
   $item1=$_POST['item1'];
    $item2=$_POST['item2'];
	 $item3=$_POST['item3'];
	  $item4=$_POST['item4'];
	   $item5=$_POST['item5'];
	    $item6=$_POST['item6'];
		 $item7=$_POST['item7'];
		 echo $item1;
		 echo $item2;
 
   
   mysql_query("Update tablaitems set item1='$item1',item2='$item2',item3='$item3',item4='$item4',item5='$item5',item6='$item6',item7='$item7' where id=1",$link);
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=elige.php\">";
   ?>
</body>
</html>
