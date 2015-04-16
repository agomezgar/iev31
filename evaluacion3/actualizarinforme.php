
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
?><?php 
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
$promo1=$_POST['promo1'];
$promo2=$_POST['promo2'];
$promo3=$_POST['promo3'];
$promo4=$_POST['promo4'];
$promo5=$_POST['promo5'];
$medpromo1=$_POST['medpromo1'];
$medpromo2=$_POST['medpromo2'];
$medpromo3=$_POST['medpromo3'];
$medpromo4=$_POST['medpromo4'];
$medpromo5=$_POST['medpromo5'];
$obsrend1=$_POST['obsrend1'];
$obsrend2=$_POST['obsrend2'];
$obsrend3=$_POST['obsrend3'];
$obsrend4=$_POST['obsrend4'];
$obsrend5=$_POST['obsrend5'];
$obsrend6=$_POST['obsrend6'];
$obsrend7=$_POST['obsrend7'];
$obscomp1=$_POST['obscomp1'];
$obscomp2=$_POST['obscomp2'];
$obscomp3=$_POST['obscomp3'];
$obscomp4=$_POST['obscomp4'];
$obscomp5=$_POST['obscomp5'];
$obscomp6=$_POST['obscomp6'];
$obscomp7=$_POST['obscomp7'];
$obscomp8=$_POST['obscomp8'];


 $result4=mysql_query("UPDATE informe3eval SET m1='$m1', m2='$m2',m3='$m3',m4='$m4',m5='$m5',m6='$m6',m7='$m7',m8='$m8',ob='$ob',promo1='$promo1',promo2='$promo2',promo3='$promo3',promo4='$promo4',promo5='$promo5',medpromo1='$medpromo1',medpromo2='$medpromo2',medpromo3='$medpromo3',medpromo4='$medpromo4',medpromo5='$medpromo5',obsrend1='$obsrend1', obsrend2='$obsrend2',obsrend3='$obsrend3',obsrend4='$obsrend4',obsrend5='$obsrend5',obsrend6='$obsrend6',obsrend7='$obsrend7',obscomp1='$obscomp1',obscomp2='$obscomp2',obscomp3='$obscomp3',obscomp4='$obscomp4',obscomp5='$obscomp5',obscomp6='$obscomp6',obscomp7='$obscomp7',obscomp8='$obscomp8'WHERE id ='$id'",$link);
mysql_free_result;
echo "<meta http-equiv=\"refresh\" content=\"0;URL=grabargrupo.php\">";
?>
