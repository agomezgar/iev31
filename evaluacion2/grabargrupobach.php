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
<?php session_start();
if (!isset ($_SESSION['identificado'])){echo "error; me has querido engañar";die;}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Seleccione grupo</title>
<script>

function enviar(){
document.claves.submit();
}

</script>
<script src="ajax.js" language="javascript"></script>


</head>

<body>

<table width="100%" border="0" align="center">
  <tr>
    <td>
      <div align="center">
        <input type="button" name="Submit2" value="GRABAR DATOS ESO" onClick="window.location.href='grabargrupo.php'"/>
      </div>
    </td>
    <td><div align="center">
      <input type="button" name="Submit22" value="IMPRIMIR INFORME INDIVIDUAL ESO" onClick="window.location.href='imprimeindividualgrupo.php'"/>
    </div></td>
    <td><div align="center">
      <input type="button" name="Submit23" value="IMPRIMIR INFORMES DE UN GRUPO DE ESO" onClick="window.location.href='grupoasignaturatodo.php'"/>
    </div></td>
  </tr>
  <tr>
    <td>
      <div align="center">
        <input type="button" name="Submit2" value="GRABAR DATOS BACHILLERATO" onClick="window.location.href='grabargrupobach.php'"/>
      </div>
    </td>
    <td><div align="center">
      <input type="button" name="Submit22" value="IMPRIMIR INFORME INDIVIDUAL BACHILLERATO" onClick="window.location.href='imprimeindividualgrupobach.php'"/>
    </div></td>
    <td><div align="center">
      <input type="button" name="Submit23" value="IMPRIMIR INFORMES DE UN GRUPO DE BACHILLERATO" onClick="window.location.href='grupoasignaturatodobach.php'"/>
    </div></td>
  </tr>
</table>
<form action="grabargrupo.php" method="post" name="claves">
  <label for="textfield"><img src="../LOGO.jpg" width="100%" height="115" /><br />
 </label>
 <div id="grupos">
  <select name="grupo" id="grupo" onChange="validargrupobach()">
  <option value=""> </option>
        <?php 
		   require("conectarse.php");
   $link=Conectarse();

   $result = mysql_query("SELECT * FROM gruposinf order by nombre",$link);

while($row = mysql_fetch_array($result)) {
?>
        <option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre']; ?></option>
      
  <?php 
  }
  mysql_free_result;
?>
  </select></div>
<div id="alumno">
<select name="alumno" disabled="true"><option value="">Escoja un grupo:</option></select>
</div></form>
<div id="presentadatos">
SELECCIONANDO ALUMNO PARA INICIAR INFORME...</div>


<div id="grabado"></div>
</body>
</html>
