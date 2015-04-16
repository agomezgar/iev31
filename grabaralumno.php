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
   require("conectarse.php");
   $link=Conectarse();

  $grupo=$_POST['grupo'];



   ?>
<table width="100%" border="0" align="center">
  <tr>
    <td>
      <div align="center">
        <input type="button" name="Submit2" value="GRABAR DATOS" onClick="window.location.href='grabargrupo.php'"/>
      </div>
    </td>
    <td><div align="center">

    </div></td>
    <td><div align="center">
      <input type="button" name="Submit23" value="IMPRIMIR INFORMES DE UN GRUPO" onClick="window.location.href='grupoasignaturatodo.php'"/>
    </div></td>
  </tr>
</table>
<form id="informe" name="informe" method="post" action="grabarinforme.php">

        <?php $result = mysql_query("SELECT alumno FROM matriculas WHERE grupo='$grupo'",$link);

while($row = mysql_fetch_array($result)) {
$numero=mysql_num_rows($result);
$nene=mysql_query("SELECT * FROM alumnos WHERE alumno=$row[alumno] ORDER BY apellidos");

?>
<?
while($nene2=mysql_fetch_array($nene)){
$consultagrabacion=mysql_query("SELECT * FROM informe3eval WHERE id=$row[alumno]");
while ($grabacion=mysql_fetch_array($consultagrabacion)){
$lenguacomp=$grabacion['lengua'];
echo '<table border="1"><tr><td>ALUMNO: '.$nene2['apellidos'].', '.$nene2['nombre'].' <p>NIVEL DEMOSTRADO: <select name="'.$nene2['alumno'].'nivel" id="nivel"> <option value=""> </option> <option value="MUY BAJO">MUY BAJO </option> <option value="BAJO">BAJO </option> <option value="MEDIO-BAJO">MEDIO-BAJO </option> <option value="MEDIO"> MEDIO</option></td></tr><tr><td>LENGUA: <input type="checkbox" name="'.$nene2['alumno'].'lengua" value="1" id="lengua"<?php if  ($lenguacomp==1) {echo "checked";} ?><p>MATEMATICAS: <input type="checkbox" name="'.$nene2['alumno'].'matematicas" value="1" id="matematicas"<?php if  ($matematicas==1) {echo "checked";} ?><p>CIENCIAS SOCIALES: <input type="checkbox" name="'.$nene2['alumno'].'sociales" value="1" id="sociales"<?php if  ($sociales==1) {echo "checked";} ?><p>BIOLOGIA:  <input type="checkbox" name="'.$nene2['alumno'].'biologia" value="1" id="biologia"<?php if  ($biologia==1) {echo "checked";} ?><p>FISICA Y QUIMICA: <input type="checkbox" name="'.$nene2['alumno'].'fisica" value="1" id="fisica"<?php if  ($fisica==1) {echo "checked";} ?><p> INGLES: <input type="checkbox" name="'.$nene2['alumno'].'ingles" value="1" id="ingles"<?php if  ($ingles==1) {echo "checked";} ?><p>MUSICA: <input type="checkbox" name="musica" value="1" id="musica"<?php if  ($musica==1) {echo "checked";} ?><p>PLASTICA: <input type="checkbox" name="'.$nene2['alumno'].'plastica" value="1" id="plastica"<?php if  ($plastica==1) {echo "checked";} ?><p>TECNOLOGIAS: <input type="checkbox" name="'.$nene2['alumno'].'tecnologias" value="1" id="tecnologias"<?php if  ($tecnologias==1) {echo "checked";} ?><p>EDUCACION FISICA: <input type="checkbox" name="'.$nene2['alumno'].'gimnasia" value="1" id="gimnasia"<?php if  ($gimnasia==1) {echo "checked";} ?><p> RELIGION: <input type="checkbox" name="'.$nene2['alumno'].'religion" value="1" id="religion"<?php if  ($religion==1) {echo "checked";} ?><p>OPTATIVA (INDICAR NOMBRE) <input type="checkbox" name="'.$nene2['alumno'].'optativa" value="1" id="optativa"<?php if  ($optativa==1) {echo "checked";} ?> <p> <input name="'.$nene2['alumno'].'nombreoptativa" type="text" id="nombreoptativa" size="30" ></td></tr><tr><td>OBSERVACIONES:<p><textarea name="'.$nene2['alumno'].'observaciones" cols="100%" rows="4" id="observaciones">'.$observaciones.'</textarea> </table><p><p>'."\n";?>
<input name="numero" type="hidden" value="<?php echo $numero;?>" />
<input name="grupo" type="hidden" value="<?php echo $grupo;?>" /><?
  }}}
  mysql_free_result;
echo "El nº de alumnos es: ".$numero;
?>
       
  <input type="submit" name="Submit" value="ENVIAR" id="Submit" />
</form>
      
  
