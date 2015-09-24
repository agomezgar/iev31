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
   include ("../config.php");

   $link=Conectarse();


$crealumnos="CREATE TABLE IF NOT EXISTS alumnos(
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
`movil` text NOT NULL ,
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
mysql_query($crealumnos,$link) or die ("ALGO FALLÓ
");

$creamatriculas="CREATE TABLE IF NOT EXISTS matriculas(
`alumno` varchar( 6 ) NOT NULL ,
`matricula` varchar( 8 ) NOT NULL ,
`apellidos` text NOT NULL ,
`nombre` text NOT NULL ,
`etapa` varchar( 4 ) NOT NULL ,
`anno` varchar( 4 ) NOT NULL ,
`tipo` varchar( 2 ) NOT NULL ,
`estudios` text NOT NULL ,
`grupo` text NOT NULL ,
`repetidor` text NOT NULL ,
`fechamatricula` text NOT NULL ,
`centro` varchar( 10 ) NOT NULL ,
`procedencia` varchar( 10 ) NOT NULL ,
`estadomatricula` text NOT NULL ,
`fecharesmatricula` text NOT NULL ,
`numexpcentro` varchar( 5) NOT NULL ,

PRIMARY KEY ( `alumno` )
) ";
mysql_query($creamatriculas,$link) or die ("ALGO FALLÓ
");
	$tablainformes1="CREATE TABLE IF NOT EXISTS informe1eval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY ( `id` )
) ";
mysql_query($tablainformes1,$link);

	$tablainformes2="CREATE TABLE IF NOT EXISTS informe2eval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY ( `id` )
) ";
mysql_free_result;
mysql_query($tablainformes2,$link);

	$tablainformes3="CREATE TABLE IF NOT EXISTS informe3eval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
`promo1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp8` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
PRIMARY KEY ( `id` )
) ";
mysql_free_result;

mysql_query($tablainformes3,$link);

$tablainformesext="CREATE TABLE IF NOT EXISTS informeexteval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
`promo1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp8` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
PRIMARY KEY ( `id` )
) ";
mysql_free_result;

mysql_query($tablainformesext,$link);
	$tablainformesbach1="CREATE TABLE IF NOT EXISTS informebach1eval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`aspectos` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY ( `id` )
) ";
mysql_query($tablainformesbach1,$link);
	$tablainformesbach2="CREATE TABLE IF NOT EXISTS informebach2eval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`aspectos` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY ( `id` )
) ";
mysql_query($tablainformesbach2,$link);
	$tablainformesbach3="CREATE TABLE IF NOT EXISTS informebach3eval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`aspectos` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
PRIMARY KEY ( `id` )
) ";
mysql_query($tablainformesbach3,$link);



$tablainformesbachext="CREATE TABLE IF NOT EXISTS informebachexteval(
`id` int( 6 ) NOT NULL ,
`grupo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`alumno` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`aspectos` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m1` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m2` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m3` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m4` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m5` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m6` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m7` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`m8` text COLLATE utf8_spanish_ci NOT NULL ,
`ob` text COLLATE utf8_spanish_ci NOT NULL ,
`pend` varchar( 2 ) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,

PRIMARY KEY ( `id` )
) ";
mysql_free_result;

mysql_query($tablainformesbachext,$link);
	$tablaitems="CREATE TABLE IF NOT EXISTS tablaitems(
`id` int( 2 ) NOT NULL auto_increment,
`item1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`item2` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`item3` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`item4` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`item5` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`item6` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`item7` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
PRIMARY KEY ( `id` )
) ";
mysql_free_result;
mysql_query($tablaitems,$link);

mysql_query("insert into tablaitems (item1,item2,item3,item4,item5,item6,item7) values ('Refuerzo de habilidades instrumentales: lectura comprensiva, expresión escrita...','Incrementar el tiempo de trabajo en casa','Entrega puntual de trabajos y tareas escolares','Potenciar la implicación de la familia','Asistencia puntual y regular a clase','Mejorar comportamiento y disciplina en el aula','Mejorar la integración en el aula')",$link);
mysql_free_result;


	$tablaitemspromocion="CREATE TABLE IF NOT EXISTS tablaitemspromocion(
`id` int( 2 ) NOT NULL auto_increment,
`promo1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo2` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo3` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo4` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`promo5` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,

PRIMARY KEY ( `id` )
) ";
mysql_free_result;
mysql_query($tablaitemspromocion,$link);

mysql_query("insert into tablaitemspromocion (promo1,promo2,promo3,promo4,promo5) values ('Promociona por haber superado los objetivos de las materias cursadas.','Promociona por haber superado los objetivos de las materias cursadas, con una materia suspensa.','Promociona por haber superado los objetivos de las materias cursadas, con dos materias suspensas.','Promociona por haber permanecido dos años en el mismo curso a pesar de tener varias materias suspensas.','No promociona por tener mas de dos materias suspensas.')",$link);
mysql_free_result;

	$tablamedidaspromocion="CREATE TABLE IF NOT EXISTS tablamedidaspromocion(
`id` int( 2 ) NOT NULL auto_increment,
`medpromo1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo2` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo3` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo4` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`medpromo5` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,

PRIMARY KEY ( `id` )
) ";
mysql_free_result;
mysql_query($tablamedidaspromocion,$link);

mysql_query("insert into tablamedidaspromocion (medpromo1,medpromo2,medpromo3,medpromo4,medpromo5) values ('Cursar un programa de Diversificacion Curricular','Cursar un programa de Cualificacion Profesional Inicial','PTI (Plan de Trabajo Individual) en las materias suspensas','Grupo de Curriculo Adaptado','Refuerzos y/o apoyos')",$link);
mysql_free_result;

$tablaobsrendimiento="CREATE TABLE IF NOT EXISTS tablaobsrendimiento(
`id` int( 2 ) NOT NULL auto_increment,
`obsrend1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend2` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend3` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend4` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend5` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend6` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obsrend7` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
PRIMARY KEY ( `id` )
) ";
mysql_free_result;
mysql_query($tablaobsrendimiento,$link);

mysql_query("insert into tablaobsrendimiento(obsrend1,obsrend2,obsrend3,obsrend4,obsrend5,obsrend6,obsrend7) values ('El alumno/-a tiene mucho interes y trabaja con esfuerzo y motivacion','En general tiene interes y se esfuerza por sacar adelante sus estudios','Aunque tiene interes y motivación podría esforzarse un poco mas','El rendimiento ha ido aumentando a lo largo del curso','El rendimiento ha ido bajando a lo largo del curso','El alumno/-a no esta nada motivado, no tiene interes y no se esfuerza para superar el curso','Falta mucho a clase y eso repercute en su rendimiento')",$link);
mysql_free_result;


$tablaobscomportamiento="CREATE TABLE IF NOT EXISTS tablaobscomportamiento(
`id` int( 2 ) NOT NULL auto_increment,
`obscomp1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp2` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp3` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp4` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp5` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp6` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp7` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
`obscomp8` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL ,
PRIMARY KEY ( `id` )
) ";
mysql_free_result;
mysql_query($tablaobscomportamiento,$link);

mysql_query("insert into tablaobscomportamiento(obscomp1,obscomp2,obscomp3,obscomp4,obscomp5,obscomp6,obscomp7,obscomp8) values ('Muy buen comportamiento y actitud en clase','Aunque es un poco hablador/-a, en general manifiesta buen comportamiento','En general manifiesta buen comortamiento aunque en ocasiones es necesario llamarle la atencion','Aunque empezo mal su comportamiento ha ido mejorando progresivamente a lo largo del curso','Su comportamiento ha ido empeorando progresivamente desde el comienzo del curso','Se le han abierto varios partes de incidencia a lo largo del curso','Ha sido necesario expulsarle por mala conducta','Se le ha abierto un expediente disciplinario')",$link);
mysql_free_result;

$grupos="gruposinf";
$creargrupos="CREATE TABLE IF NOT EXISTS $grupos(
id int(2)unsigned NOT NULL auto_increment,
`nombre` text NOT NULL ,
PRIMARY KEY ( `id` )
)";
mysql_query($creargrupos,$link);
mysql_free_result;
$claves="claves";
$crearclaves="CREATE TABLE IF NOT EXISTS $claves(
id int(2)unsigned NOT NULL auto_increment,
`nombre` text NOT NULL ,`contra` text NOT NULL,
PRIMARY KEY ( `id` )
)";
mysql_query($crearclaves,$link);
$usuario2=md5($usuario);
$contra2=md5($contra);
mysql_query("insert into claves (nombre,contra) values ('$usuario2','$contra2')",$link);
mysql_free_result;


$creargrupos="CREATE TABLE IF NOT EXISTS gruposinf(
id int(2)unsigned NOT NULL auto_increment,
`nombre` text NOT NULL ,
PRIMARY KEY ( `id` )
)";
mysql_query($creargrupos,$link);
echo "<meta http-equiv=\"refresh\" content=\"0;URL=elige.php\">";
?>
