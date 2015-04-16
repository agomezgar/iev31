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
<script src="ajax.js" language="javascript"></script>
<?php
   include("conectarse.php");
   include("../config.php");
   $link=Conectarse();
  $alumno=$_POST['alumno'];
  $grupo=$_POST['grupo'];

         $result2 = mysql_query("SELECT * FROM alumnos WHERE alumno='$alumno'",$link);

while($row3 = mysql_fetch_array($result2)) {
$nombrealumno=$row3['apellidos'].",".$row3['nombre'];?>

<table width="50%" border="1" align="center">
  <tr>
    <td><div align="center">
      <p><strong>CURSO: <?php echo $curso;?></strong></p>
      <p><strong><?php echo $grupo;?></strong></p>
      <p><strong>INFORME DE LA EVALUACI&Oacute;N EXTRAORDINARIA</strong></p>
      <p align="left"><strong>ALUMNO/A:<?PHP echo urlencode($row3['apellidos']).",".urlencode($row3['nombre']);?> &nbsp;</strong></p>
    </div></td>
  </tr>
</table>
<p>
<fieldset><legend><strong>DATOS PERSONALES</strong></legend>
      <p>
        <?php

echo "DNI: ".$row3['dni']."<p>";
echo "Fecha de nacimiento: ".$row3['fecha']."<p>";
echo "domicilio: ".urlencode($row3['dom']).",".urlencode($row3['loc']).",".urlencode($row3['prov'])."<p>";
 

$result3=mysql_query("select * from informeexteval where id=$alumno",$link);
while($comprueba= mysql_fetch_array($result3)) {
$d=$comprueba['id'];}
if (!isset($d)){echo "En este momento no constan medidas de ampliacin y/o refuerzo"; $destino="grabarinforme.php";}
if (isset($d)){echo "Ya se ha rellenado un informe sobre la evaluacin del alumno; rellenar este informe supone introducir cambios ";$destino="actualizarinforme.php";}

mysql_free_result($result3);

  
    $result4=mysql_query("select * from informeexteval where id='$alumno'",$link);
while($row4 = mysql_fetch_array($result4)) {


$m1=$row4['m1'];
$m2=$row4['m2'];
$m3=$row4['m3'];
$m4=$row4['m4'];
$m5=$row4['m5'];
$m6=$row4['m6'];
$m7=$row4['m7'];
$m8=$row4['m8'];
$ob=$row4['ob'];
$pend=$row4['pend'];
$promo1=$row4['promo1'];
$promo2=$row4['promo2'];
$promo3=$row4['promo3'];
$promo4=$row4['promo4'];
$promo5=$row4['promo5'];
$medpromo1=$row4['medpromo1'];
$medpromo2=$row4['medpromo2'];
$medpromo3=$row4['medpromo3'];
$medpromo4=$row4['medpromo4'];
$medpromo5=$row4['medpromo5'];
$obsrend1=$row4['obsrend1'];
$obsrend2=$row4['obsrend2'];
$obsrend3=$row4['obsrend3'];
$obsrend4=$row4['obsrend4'];
$obsrend5=$row4['obsrend5'];
$obsrend6=$row4['obsrend6'];
$obsrend7=$row4['obsrend7'];
$obscomp1=$row4['obscomp1'];
$obscomp2=$row4['obscomp2'];
$obscomp3=$row4['obscomp3'];
$obscomp4=$row4['obscomp4'];
$obscomp5=$row4['obscomp5'];
$obscomp6=$row4['obscomp6'];
$obscomp7=$row4['obscomp7'];
$obscomp8=$row4['obscomp8'];
}
$items=mysql_query("select * from tablaitems where id=1",$link);
while ($item=mysql_fetch_array($items)){
$item1=$item['item1'];
$item2=$item['item2'];
$item3=$item['item3'];
$item4=$item['item4'];
$item5=$item['item5'];
$item6=$item['item6'];
$item7=$item['item7'];
}

$promoitems=mysql_query("select * from tablaitemspromocion where id=1",$link);
while ($promoitem=mysql_fetch_array($promoitems)){
$lecturapromo1=$promoitem['promo1'];
$lecturapromo2=$promoitem['promo2'];
$lecturapromo3=$promoitem['promo3'];
$lecturapromo4=$promoitem['promo4'];
$lecturapromo5=$promoitem['promo5'];
}

$promomeds=mysql_query("select * from tablamedidaspromocion where id=1",$link);
while ($promomed=mysql_fetch_array($promomeds)){
$lecturamedpromo1=$promomed['medpromo1'];
$lecturamedpromo2=$promomed['medpromo2'];
$lecturamedpromo3=$promomed['medpromo3'];
$lecturamedpromo4=$promomed['medpromo4'];
$lecturamedpromo5=$promomed['medpromo5'];
}

$obscomps=mysql_query("select * from tablaobscomportamiento where id=1",$link);
while ($obscomp=mysql_fetch_array($obscomps)){
$lecturaobscomp1=$obscomp['obscomp1'];
$lecturaobscomp2=$obscomp['obscomp2'];
$lecturaobscomp3=$obscomp['obscomp3'];
$lecturaobscomp4=$obscomp['obscomp4'];
$lecturaobscomp5=$obscomp['obscomp5'];
$lecturaobscomp6=$obscomp['obscomp6'];
$lecturaobscomp7=$obscomp['obscomp7'];
$lecturaobscomp8=$obscomp['obscomp8'];

}


$obrends=mysql_query("select * from tablaobsrendimiento where id=1",$link);
while ($obsrend=mysql_fetch_array($obrends)){
$lecturaobsrend1=$obsrend['obsrend1'];
$lecturaobsrend2=$obsrend['obsrend2'];
$lecturaobsrend3=$obsrend['obsrend3'];
$lecturaobsrend4=$obsrend['obsrend4'];
$lecturaobsrend5=$obsrend['obsrend5'];
$lecturaobsrend6=$obsrend['obsrend6'];
$lecturaobsrend7=$obsrend['obsrend7'];

}

?>
      </p>
      <p>&nbsp; </p>
</fieldset>
<form id="form1" name="form1" method="post" action="<?php echo $destino; ?>">
 <input type="checkbox" name="pend" value="1" id="pend" <?php if  ($pend==1) {echo "checked";} ?> />EL ALUMNO TIENE MATERIAS PENDIENTES
<fieldset>
<legend><strong>1. MEDIDAS DE AMPLIACI&Oacute;N Y REFUERZO</strong></legend>

<?php 


?>

<p>
  <input type="checkbox" name="m1" value="1" id="m1" <?php if  ($m1==1) {echo "checked";} ?> />
<?php echo urlencode($item1); ?>
<p>
  <input type="checkbox" name="m2" value="1" id="m2" <?php if  ($m2==1) {echo "checked";} ?>/>
<?php echo urlencode($item2); ?>
<p>
  <input type="checkbox" name="m3" value="1" id="m3" <?php if  ($m3==1) {echo "checked";} ?>/>
<?php echo urlencode($item3); ?>
<p>
  <input type="checkbox" name="m4" value="1" id="m4" <?php if  ($m4==1) {echo "checked";} ?>/>
 <?php echo urlencode($item4); ?>
<p>
  <input type="checkbox" name="m5" value="1" id="m5" <?php if  ($m5==1) {echo "checked";} ?>/>
<?php echo urlencode($item5); ?>
<p>
  <input type="checkbox" name="m6" value="1" id="m6" <?php if  ($m6==1) {echo "checked";} ?>/>
<?php echo urlencode($item6); ?>
<p>
  <input type="checkbox" name="m7" value="1" id="checkbox" <?php if  ($m7==1) {echo "checked";} ?> />
 <?php echo urlencode($item7); ?>
<p>

<p>OTRAS MEDIDAS:</p>
<p>
  <label for="label"></label>
  <textarea name="m8" cols="100%" rows="4" id="label"><?php echo urlencode($m8) ?></textarea>
</p>
</fieldset>
<fieldset>
<legend></legend>
<legend><strong>2. PROMOCI&Oacute;N</strong></legend>
<p>
    <input type="checkbox" name="promo1" value="1" id="promo1" <?php if  ($promo1==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturapromo1); ?></p>
  <p>
    <input type="checkbox" name="promo2" value="1" id="promo2" <?php if  ($promo2==1) {echo "checked";} ?> /> 
  <?php echo urlencode($lecturapromo2); ?></p>
  <p>
    <input type="checkbox" name="promo3" value="1" id="promo3" <?php if  ($promo3==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturapromo3); ?>  </p>
  <p>
    <input type="checkbox" name="promo4" value="1" id="promo4" <?php if  ($promo4==1) {echo "checked";} ?> />
  <?php echo urlencode($lecturapromo4); ?></p>
  <p>
    <input type="checkbox" name="promo5" value="1" id="promo5" <?php if  ($promo5==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturapromo5); ?>  </p>
  <p>&nbsp;</p>
  <p><strong>3. MEDIDAS PROPUESTAS </strong></p>
   <p>
    <input type="checkbox" name="medpromo1" value="1" id="medpromo1" <?php if  ($medpromo1==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturamedpromo1); ?>
  </p>
  </p>
  <p>
    <input type="checkbox" name="medpromo2" value="1" id="medpromo2" <?php if  ($medpromo2==1) {echo "checked";} ?> /> 
  <?php echo urlencode($lecturamedpromo2); ?></p>
  <p>
    <input type="checkbox" name="medpromo3" value="1" id="medpromo3" <?php if  ($medpromo3==1) {echo "checked";} ?> />
  <?php echo urlencode($lecturamedpromo3); ?>  </p>
  <p>
    <input type="checkbox" name="medpromo4" value="1" id="medpromo4" <?php if  ($medpromo4==1) {echo "checked";} ?> />
  <?php echo urlencode($lecturamedpromo4); ?></p>
  <p>
    <input type="checkbox" name="medpromo5" value="1" id="medpromo5" <?php if  ($medpromo5==1) {echo "checked";} ?> />
  <?php echo urlencode($lecturamedpromo5); ?></p>
  <p>&nbsp;</p>
  <p><strong>4. OBSERVACIONES</strong></p>
  <p><strong>A. RENDIMIENTO:</strong></p>
  <p> <input type="checkbox" name="obsrend1" value="1" id="obsrend1" <?php if  ($obsrend1==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend1); ?></p>
	<p> <input type="checkbox" name="obsrend2" value="1" id="obsrend2" <?php if  ($obsrend2==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend2); ?></p>
	<p> <input type="checkbox" name="obsrend3" value="1" id="obsrend3" <?php if  ($obsrend3==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend3); ?></p>
	<p> <input type="checkbox" name="obsrend4" value="1" id="obsrend4" <?php if  ($obsrend4==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend4); ?></p>
	<p> <input type="checkbox" name="obsrend5" value="1" id="obsrend5" <?php if  ($obsrend5==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend5); ?></p>
	<p> <input type="checkbox" name="obsrend6" value="1" id="obsrend6" <?php if  ($obsrend6==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend6); ?></p>
	<p> <input type="checkbox" name="obsrend7" value="1" id="obsrend7" <?php if  ($obsrend7==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobsrend7); ?></p>
	<p>&nbsp;</p>
	<p><strong>B.. COMPORTAMIENTO:</strong></p>
	  <p> <input type="checkbox" name="obscomp1" value="1" id="obscomp1" <?php if  ($obscomp1==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp1); ?></p>
		  <p> <input type="checkbox" name="obscomp2" value="1" id="obscomp2" <?php if  ($obscomp2==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp2); ?></p>
		  <p> <input type="checkbox" name="obscomp3" value="1" id="obscomp3" <?php if  ($obscomp3==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp3); ?></p>
		  <p> <input type="checkbox" name="obscomp4" value="1" id="obscomp4" <?php if  ($obscomp4==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp4); ?></p>
		  <p> <input type="checkbox" name="obscomp5" value="1" id="obscomp5" <?php if  ($obscomp5==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp5); ?></p>
		  <p> <input type="checkbox" name="obscomp6" value="1" id="obscomp6" <?php if  ($obscomp6==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp6); ?></p>
		  <p> <input type="checkbox" name="obscomp7" value="1" id="obscomp7" <?php if  ($obscomp7==1) {echo "checked";} ?> />
    <?php echo urlencode($lecturaobscomp7); ?></p>
		  <p> 
		    <input type="checkbox" name="obscomp8" value="1" id="obscomp8" <?php if  ($obscomp8==1) {echo "checked";} ?> />
  <?php echo urlencode($lecturaobscomp8); ?></p>
		  <p>&nbsp;</p>
		  <p>
<legend><strong>INFORMACI&Oacute;N COMPLEMENTARIA SOBRE LOS OBJETIVOS, CONTENIDOS Y CRITERIOS DE EVALUACI&Oacute;N DESARROLLADOS EN EL TRIMESTRE </strong></legend>
<p><strong>IMPRESI&Oacute;N DEL TUTOR </strong>:</p>
<p>
  <label for="textarea"></label>
  <textarea name="ob" cols="100%" rows="4" id="ob"><?php echo urlencode($ob);?></textarea>
</p>
<p>&nbsp;</p>
<p><input name="alumno" type="hidden" value="<?php echo $alumno;?>" />
  <input name="nombrealumno" type="hidden" id="nombrealumno" value="<?php echo $nombrealumno; ?>" />
<p><input name="grupo" type="hidden" value="<?php echo $grupo;}?>" />
  <label for="Submit"></label>
  <input type="submit" name="Submit" value="ENVIAR" id="Submit" />
</p>


