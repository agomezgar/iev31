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
<?php require ('fpdf.php');
$grupo=$_POST['grupo'];

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
class PDF extends FPDF
{


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

$pdf=new PDF;
$link=Conectarse();
$ordenando=mysql_query("SELECT * FROM alumnos ORDER BY apellidos");
while($ordenado=mysql_fetch_array($ordenando)){

$result = mysql_query("SELECT alumno FROM matriculas WHERE grupo='$grupo'",$link);

while($row = mysql_fetch_array($result)) {
if ($row[alumno]==$ordenado[alumno]){
$nene=mysql_query("SELECT * FROM alumnos WHERE alumno=$row[alumno] ORDER BY apellidos");
while($nene2=mysql_fetch_array($nene)){


$nombrealumno=$nene2['apellidos'].",".$nene2['nombre'];

$alumno=$nene2['alumno'];
$encabezamiento='CURSO: '.$curso."\n".$grupo."\n".'INFORME DE LA SEGUNDA EVALUACIÓN'."\n ALUMNO:".$nombrealumno;
 $result4=mysql_query("select * from informebach2eval where id='$alumno'",$link);
while($row4 = mysql_fetch_array($result4)) {
require ('../config.php');
$encabezamiento='CURSO: '.$curso."\n".$grupo."\n".'INFORME DE LA SEGUNDA EVALUACIÓN'."\n ALUMNO:".$nombrealumno;
$aspectos=$row4['aspectos'];
$m1=$row4['m1'];
$m2=$row4['m2'];
$m3=$row4['m3'];
$m4=$row4['m4'];
$m5=$row4['m5'];
$m6=$row4['m6'];
$m7=$row4['m7'];
$m8=$row4['m8'];
$ob=$row4['ob'];
$pend=$row4['pend'];}}

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

$pdf->Addpage();
$pdf->SetFont('Arial','B',14);
$pdf->Image('logoclm.jpg',10,10);

$pdf->SetLineWidth(1);
$pdf->Cell(50,10,'');
$pdf->SetFillColor(240,240,240);
$pdf->Multicell(120,10,$encabezamiento,1,'C',1,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'A. GRADO DE CONSECUCIÓN DE OBJETIVOS Y COMPETENCIAS BÁSICAS.',1,'C',1,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Multicell(180,5,'En función de las calificaciones recogidas en el boletín de notas que acompaña a este informe se considerará el siguiente baremo:'."\n".'·Calificación de SOBRESALIENTE y NOTABLE: ha superado ampliamente los objetivos y competencias básicas según los criterios de evaluación programados.'."\n".'·Calificación de BIEN y SUFICIENTE: ha superado suficientemente los objetivos y competencias básicas según los criterios de evaluación programados.'."\n".'·Calificación de INSUFICIENTE: no ha superado los objetivos y competencias básicas según los criterios de evaluación programados');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'B. ASPECTOS EN LOS QUE HA MEJORADO Y EN LOS QUE NECESITA MEJORAR',1,'C',1,1);
$pdf->SetFont('Arial','',10);
$pdf->Ln(5);
$pdf->Multicell(180,5,$aspectos,0,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'C. MEDIDAS DE AMPLIACIÓN Y REFUERZO',1,'C',1,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
if ($m1==1) {$pdf->Cell(180,5,$item1,0,1);}
if ($m2==1) {$pdf->Cell(180,5,$item2,0,1);}
if ($m3==1) {$pdf->Cell(180,5,$item3,0,1);}
if ($m4==1) {$pdf->Cell(180,5,$item4,0,1);}
if ($m5==1) {$pdf->Cell(180,5,$item5,0,1);}
if ($m6==1) {$pdf->Cell(180,5,$item6,0,1);}
if ($m7==1) {$pdf->Cell(180,5,$item7,0,1);}
if (!($m1==1|$m2==1|$m3==1|$m4==1|$m5==1|$m6==1|$m6==1|$m7==1)) {$pdf->Cell(180,10,'La junta de evaluación no ha considerado necesarias medidas de ampliación y refuerzo',0,1);}
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
if ($pend==1) {$pdf->Cell(180,5,'EL ALUMNO TIENE MATERIAS PENDIENTES',0,1);}
$pdf->Ln(5);
$pdf->Cell(180,5,'OTRAS MEDIDAS DE AMPLIACIÓN Y REFUERZO',0,1);
$pdf->SetFont('Arial','',10);
if ($m8=='') {$pdf->Cell(180,5,'No se consideran necesarias otras medidas de ampliación y refuerzo',0,1);}else{
$pdf->Multicell(180,5,$m8,0,1);}
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'OBSERVACIONES',0,1);
$pdf->SetFont('Arial','',10);
if ($ob=='') {$pdf->Cell(180,5,'No hay observaciones',0,1);}else{
$pdf->Multicell(180,5,$ob,0,1);}
$pdf->Ln(15);
$pdf->Cell(120,5);
$pdf->Cell(60,5,'El tutor/-a:____________________________');
$pdf->SetY(265);
    //Arial italic 8
    $pdf->SetFont('Arial','I',8);

}}}
//Determinar un nombre temporal de fichero en el directorio actual
$file = basename(tempnam('.', 'tmp'));
rename($file, $file.'.pdf');
$file .= '.pdf';
//Guardar el PDF en un fichero
$pdf->Output($file, 'F');
//Redirección
header('Location: '.$file);
?>
