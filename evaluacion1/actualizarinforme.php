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
<?php 
   include("conectarse.php");
   $link=Conectarse();
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];
$m7=$_POST['m7'];
$m8=$_POST['m8'];
$ob=$_POST['ob'];
$id=$_POST['alumno'];
$grupo=$_POST['grupo'];
$alumno=$_POST['nombrealumno'];
$pend=$_POST['pend'];

 $result4=mysql_query("UPDATE informe1eval SET grupo='$grupo',alumno='$alumno',m1='$m1', m2='$m2',m3='$m3',m4='$m4',m5='$m5',m6='$m6',m7='$m7',m8='$m8',ob='$ob',pend='$pend' WHERE id ='$id'",$link);
mysql_free_result;
echo "¡Grabado!";
echo "<meta http-equiv=\"refresh\" content=\"0;URL=grabargrupo.php\">";
?>
