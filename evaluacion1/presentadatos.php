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
      <p><strong>INFORME DE LA PRIMERA EVALUACI&Oacute;N</strong></p>
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
echo "domicilio: ".urlencode($row3['dom'])."<p>";
 

$result3=mysql_query("select * from informe1eval where id=$alumno",$link);
while($comprueba= mysql_fetch_array($result3)) {
$d=$comprueba['id'];}
if (!isset($d)){echo "En este momento no constan medidas de ampliacion y/o refuerzo"; $destino="grabarinforme.php";}
if (isset($d)){echo "Ya se ha rellenado un informe sobre la evaluacion del alumno; rellenar este informe supone introducir cambios ";$destino="actualizarinforme.php";}

mysql_free_result($result3);

  
    $result4=mysql_query("select * from informe1eval where id='$alumno'",$link);
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
?>
      </p>
      <p>&nbsp; </p>
</fieldset>
<form id="informe" name="informe" method="post" action="<? echo $destino; ?>">
 <input type="checkbox" name="pend" value="1" id="pend" <?php if  ($pend==1) {echo "checked";} ?> />EL ALUMNO TIENE MATERIAS PENDIENTES
<fieldset>
<legend><strong>MEDIDAS DE AMPLIACI&Oacute;N Y REFUERZO</strong></legend>

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
<p>OTRAS MEDIDAS:</p>
<p>
  <label for="label"></label>
  <textarea name="m8" cols="100%" rows="4" id="label"><?php echo urlencode($m8); ?></textarea>
</p>
</fieldset>
<fieldset>
<legend><strong>INFORMACI&Oacute;N COMPLEMENTARIA SOBRE LOS OBJETIVOS, CONTENIDOS Y CRITERIOS DE EVALUACI&Oacute;N DESARROLLADOS EN EL TRIMESTRE </strong></legend>
<p>OBSERVACIONES:</p>
<p>
  <label for="textarea"></label>
  <textarea name="ob" cols="100%" rows="4" id="ob"><?php echo urlencode($ob);?></textarea>
</p>
<p>&nbsp;</p>
<p><input name="alumno" type="hidden" value="<?php echo $alumno;?>" />
  <input name="nombrealumno" type="hidden" id="nombrealumno" value="<?php echo urlencode($nombrealumno); ?>" />
<p><input name="grupo" type="hidden" value="<?php echo urlencode($grupo);}?>" />

  <input type="submit" name="Submit" value="ENVIAR" id="Submit" />
</p>

</fieldset>
</form>
