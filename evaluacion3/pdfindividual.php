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
require('fpdf.php');
include("../config.php");
function Conectarse()
{require ('../config.php');
   if (!($link=mysql_connect($servidor,$usuario,$contra)))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db($base,$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
$link=Conectarse();
class PDF extends FPDF
{
//Cabecera de página


//Pie de página
function Footer()
{require ("../config.php");
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Número de página
    $this->Cell(0,10,$direccion,0,0,'C');
}
}
$grupo=$_POST['grupo'];
$alumno=$_POST['alumno'];
$result2 = mysql_query("SELECT * FROM alumnos WHERE alumno='$alumno'",$link);

while($row3 = mysql_fetch_array($result2)) {
$nombrealumno=$row3['apellidos'].",".$row3['nombre'];
$dni=$row3['dni'];
$domicilio=$row3['dom'].",".$row3[loc].",".$row3[prov];
$fechanacimiento=$row3['fecha'];
}
    $result4=mysql_query("select * from informe3eval where id='$alumno'",$link);
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
$link=Conectarse();
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
if ($grupo=='1esoa'){$grupobien='1º ESO A';}
if ($grupo=='1esob'){$grupobien='1º ESO B';}
if ($grupo=='1esoc'){$grupobien='1º ESO C';}
if ($grupo=='2esoa'){$grupobien='2º ESO A';}
if ($grupo=='2esob'){$grupobien='2º ESO B';}
if ($grupo=='2esoc'){$grupobien='2º ESO C';}
if ($grupo=='3esoa'){$grupobien='3º ESO A';}
if ($grupo=='3esob'){$grupobien='3º ESO B';}
if ($grupo=='3esoc'){$grupobien='3º ESO C';}
if ($grupo=='3diver'){$grupobien='3º ESO DIVERSIFICACIÓN';}
if ($grupo=='4esoa'){$grupobien='4º ESO A';}
if ($grupo=='4esob'){$grupobien='4º ESO B';}
if ($grupo=='4esoc'){$grupobien='4º ESO C';}
if ($grupo=='4esod'){$grupobien='4º ESO D';}
if ($grupo=='4diver'){$grupobien='4º ESO DIVERSIFICACIÓN';}
$encabezamiento='CURSO: '.$curso."\n".$grupo."\n".'INFORME DE LA EVALUACIÓN FINAL ORDINARIA'."\n ALUMNO:".$nombrealumno;

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Image('logoclm.jpg',10,10);

$pdf->SetLineWidth(1);
$pdf->Cell(50,10,'');
$pdf->SetFillColor(240,240,240);
$pdf->Multicell(120,8,$encabezamiento,1,'C',1,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(180,5,'A. GRADO DE CONSECUCIÓN DE OBJETIVOS Y COMPETENCIAS BÁSICAS.',1,'C',1,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',8);
$pdf->Multicell(180,5,'En función de las calificaciones recogidas en el boletín de notas que acompaña a este informe se considerará el siguiente baremo:'."\n".'·Calificación de SOBRESALIENTE y NOTABLE: ha superado ampliamente los objetivos y competencias básicas según los criterios de evaluación programados.'."\n".'·Calificación de BIEN y SUFICIENTE: ha superado suficientemente los objetivos y competencias básicas según los criterios de evaluación programados.'."\n".'·Calificación de INSUFICIENTE: no ha superado los objetivos y competencias básicas según los criterios de evaluación programados');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(180,5,'B. MEDIDAS DE AMPLIACIÓN Y REFUERZO',1,'C',1,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
if ($m1==1) {$pdf->Cell(180,5,$item1,0,1);}
if ($m2==1) {$pdf->Cell(180,5,$item2,0,1);}
if ($m3==1) {$pdf->Cell(180,5,$item3,0,1);}
if ($m4==1) {$pdf->Cell(180,5,$item4,0,1);}
if ($m5==1) {$pdf->Cell(180,5,$item5,0,1);}
if ($m6==1) {$pdf->Cell(180,5,$item6,0,1);}
if ($m7==1) {$pdf->Cell(180,5,$item7,0,1);}
if (!($m1==1|$m2==1|$m3==1|$m4==1|$m5==1|$m6==1|$m6==1|$m7==1)) {$pdf->Cell(180,10,'La junta de evaluación no ha considerado necesarias medidas de ampliación y refuerzo',0,1);}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(180,5,'OTRAS MEDIDAS DE AMPLIACIÓN Y REFUERZO',0,1);
$pdf->SetFont('Arial','',8);
if ($m8=='') {$pdf->Cell(180,5,'No se consideran necesarias otras medidas de ampliación y refuerzo',0,1);}else{
$pdf->Multicell(180,5,$m8,0,1);}
$pdf->Ln(5);

$pdf->SetFont('Arial','B',8);
$pdf->Multicell(180,5,'C. INFORMACIÓN COMPLEMENTARIA SOBRE LOS OBJETIVOS, CONTENIDOS Y CRITERIOS DE EVALUACIÓN DESARROLLADOS EN EL TRIMESTRE',1,1,1);

$pdf->SetFont('Arial','',8);
$pdf->Multicell(180,5,'La programación de objetivos, contenidos y criterios de evaluación trabajados en el trimestre, en cada una de las materias, están a disposición de las familias en la secretaría del centro, en tutoría, en la página web del instituto, en los tablones de información del IES...');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->Multicell(180,5,'D.PROMOCIÓN',1,1,1);
$pdf->SetFont('Arial','',8);
if ($promo1==1) {$pdf->Cell(180,5,$lecturapromo1,0,1);}
if ($promo2==1) {$pdf->Cell(180,5,$lecturapromo2,0,1);}
if ($promo3==1) {$pdf->Cell(180,5,$lecturapromo3,0,1);}
if ($promo4==1) {$pdf->Cell(180,5,$lecturapromo4,0,1);}
if ($promo5==1) {$pdf->Cell(180,5,$lecturapromo5,0,1);}

$pdf->Ln(5);
$pdf->SetFont('Arial','B',8);
$pdf->Multicell(180,5,'E.MEDIDAS PROPUESTAS',1,1,1);
$pdf->SetFont('Arial','',8);
if ($medpromo1==1) {$pdf->Cell(180,5,$lecturamedpromo1,0,1);}
if ($medpromo2==1) {$pdf->Cell(180,5,$lecturamedpromo2,0,1);}
if ($medpromo3==1) {$pdf->Cell(180,5,$lecturamedpromo3,0,1);}
if ($medpromo4==1) {$pdf->Cell(180,5,$lecturamedpromo4,0,1);}
if ($medpromo5==1) {$pdf->Cell(180,5,$lecturamedpromo5,0,1);}
$pdf->SetFont('Arial','B',8);

$pdf->Multicell(180,5,'F.OBSERVACIONES',1,1,1);
$pdf->Cell(180,5,'I) SOBRE EL RENDIMIENTO DEL ALUMNO/-A');
$pdf->SetFont('Arial','',8);
$pdf->Ln(5);
if ($obsrend1==1) {$pdf->Cell(180,5,$lecturaobsrend1,0,1);}
if ($obsrend2==1) {$pdf->Cell(180,5,$lecturaobsrend2,0,1);}
if ($obsrend3==1) {$pdf->Cell(180,5,$lecturaobsrend3,0,1);}
if ($obsrend4==1) {$pdf->Cell(180,5,$lecturaobsrend4,0,1);}
if ($obsrend5==1) {$pdf->Cell(180,5,$lecturaobsrend5,0,1);}
if ($obsrend6==1) {$pdf->Cell(180,5,$lecturaobsrend6,0,1);}
if ($obsrend7==1) {$pdf->Cell(180,5,$lecturaobsrend7,0,1);}

$pdf->SetFont('Arial','B',8);
$pdf->Cell(180,5,'II) SOBRE EL COMPORTAMIENTO DEL ALUMNO/-A');
$pdf->SetFont('Arial','',8);
$pdf->Ln(5);
if ($obscomp1==1) {$pdf->Cell(180,5,$lecturaobscomp1,0,1);}
if ($obscomp2==1) {$pdf->Cell(180,5,$lecturaobscomp2,0,1);}
if ($obscomp3==1) {$pdf->Cell(180,5,$lecturaobscomp3,0,1);}
if ($obscomp4==1) {$pdf->Cell(180,5,$lecturaobscomp4,0,1);}
if ($obscomp5==1) {$pdf->Cell(180,5,$lecturaobscomp5,0,1);}
if ($obscomp6==1) {$pdf->Cell(180,5,$lecturaobscomp6,0,1);}
if ($obscomp7==1) {$pdf->Cell(180,5,$lecturaobscomp7,0,1);}
if ($obscomp8==1) {$pdf->Cell(180,5,$lecturaobscomp8,0,1);}

$pdf->SetFont('Arial','B',8);
$pdf->Multicell(180,5,'G.VALORACIÓN DEL TUTOR',1,1,1);
$pdf->SetFont('Arial','',8);
if ($ob=='') {$pdf->Cell(180,5,'No hay observaciones',0,1);}else{
$pdf->Multicell(180,5,$ob,0,1);}
$pdf->Ln(10);
$pdf->Cell(120,5);
$pdf->Cell(60,5,'El tutor/-a:____________________________');}
//Determinar un nombre temporal de fichero en el directorio actual
$file = basename(tempnam('.', 'tmp'));
rename($file, $file.'.pdf');
$file .= '.pdf';
//Guardar el PDF en un fichero
$pdf->Output($file, 'F');
//Redirección
header('Location: '.$file);



      ?>
