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
if (!isset ($_SESSION['identificado'])){echo "error; me has querido engañar";echo "<meta http-equiv=\"refresh\" content=\"5;URL=index.php\">";}
?>
<html>
<head>
<title>1&ordf; EVALUACI&Oacute;N</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<body>
<p><img src="logo.jpg" width="100%" height="115"></p>
<p><a href="grabargrupo.php" target="_self">GRABAR DATOS</a></p>
<p><a href="imprimeindividualgrupo.php">IMPRIMIR DATOS INDIVIDUALES </a></p>
<p><a href="grupoasignaturatodo.php">IMPRIMIR TODO EL GRUPO </a></p>
<p>&nbsp;</p>
</body>
</html>
