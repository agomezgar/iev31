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

$grupoclase=$_POST['grupoclase'];
echo $grupoclase;
$creatabla="CREATE TABLE $grupoclase(
`alumno` varchar( 6 ) NOT NULL ,
`apellidos` text NOT NULL ,
`nombre` text NOT NULL ,
`sexo` text NOT NULL ,
`dni` varchar( 8 ) NOT NULL ,
`nie` varchar( 8 ) NOT NULL ,
`fecha` text NOT NULL ,
`locnac` text NOT NULL ,
`provnac` text NOT NULL ,
`correspondencia` text NOT NULL ,
`dom` text NOT NULL ,
`loc` text NOT NULL ,
`prov` text NOT NULL ,
`tf` text NOT NULL ,
`cp` varchar( 6 ) NOT NULL ,
`padre` text NOT NULL ,
`dnipadre` text NOT NULL ,
`madre` text NOT NULL ,
`dnimadre` text NOT NULL ,
`pais` text NOT NULL ,
`nacion` text NOT NULL ,
`a` varchar( 20 ) NOT NULL ,
`b` varchar( 20 ) NOT NULL ,
`c` varchar( 20 ) NOT NULL ,
`d` varchar( 20 ) NOT NULL ,
`e` varchar( 20 ) NOT NULL ,
`f` varchar( 20 ) NOT NULL ,
`g` varchar( 20 ) NOT NULL ,
`h` varchar( 20 ) NOT NULL ,
PRIMARY KEY ( `alumno` )
) ";
mysql_query($creatabla,$link);




//copiamos el archivo a la carpeta temporal
  //    Script Que copia el archivo temporal subido al servidor en un directorio.
$tipo = $_FILES['tablacsv']['type'];

//    Definimos Directorio donde se guarda el archivo
$dir = 'archivos/';

//    Intentamos Subir Archivo
//    (1) Comprobamos que existe el nombre temporal del archivo
if (isset($_FILES['tablacsv']['tmp_name'])) {
//    (2) - Comprobamos que se trata de un archivo de imágen
if ($tipo == 'text/comma-separated-values' || $tipo == 'text/x-comma-separated-values' || $tipo == 'text/csv') {
//    (3) Por ultimo se intenta copiar el archivo al servidor.
if (!copy($_FILES['tablacsv']['tmp_name'], $dir.$_FILES['tablacsv']['name']))
echo '<script> alert("'.$id_error_upload.'");</script>';

//una vez transferido, lo abrimos e insertamos en la base de datos la información
//abro el archivo

	$fp=fopen($dir.$_FILES['tablacsv']['name'],"r") or die("Error al abrir el fichero");
	$line = fgets( $fp, 2024 );

	while(!feof($fp))
	{
	list($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$ab,$ac) =split( ",", $line);
	$line = fgets( $fp, 2024 );

	
	$inserta =mysql_query("insert into $grupoclase values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$ab','$ac')");
	}
	//cerramos el archivo
	fclose($fp);

	//finalmente, eliminamos el archivo
	move_uploaded_file($_FILES['tablacsv']['tmp_name'], $dir.$_FILES['tablacsv']['name']);}}
?>
</body>
</html>
