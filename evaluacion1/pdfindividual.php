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
 * a la comunidad, pero SIN NINGUNA GARANTIA, �RECLAMACIONES, AL MAESTRO 
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
//Cabecera de p�gina


//Pie de p�gina
function Footer()
{require ("../config.php");
    //Posici�n: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //N�mero de p�gina
    $this->Cell(0,10,$direccion,0,0,'C');
}
}
$alumno=$_POST['alumno'];
$grupo=$_POST['grupo'];
         $result2 = mysql_query("SELECT * FROM alumnos WHERE alumno='$alumno'",$link);

while($row3 = mysql_fetch_array($result2)) {
$nombrealumno=$row3['apellidos'].",".$row3['nombre'];
$dni=$row3['dni'];
$domicilio=$row3['dom'].",".$row3[loc].",".$row3[prov];
$fechanacimiento=$row3['fecha'];

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
if ($grupo=='1esoa'){$grupobien='1� ESO A';}
if ($grupo=='1esob'){$grupobien='1� ESO B';}
if ($grupo=='1esoc'){$grupobien='1� ESO C';}
if ($grupo=='2esoa'){$grupobien='2� ESO A';}
if ($grupo=='2esob'){$grupobien='2� ESO B';}
if ($grupo=='2esoc'){$grupobien='2� ESO C';}
if ($grupo=='3esoa'){$grupobien='3� ESO A';}
if ($grupo=='3esob'){$grupobien='3� ESO B';}
if ($grupo=='3esoc'){$grupobien='3� ESO C';}
if ($grupo=='3diver'){$grupobien='3� ESO DIVERSIFICACI�N';}
if ($grupo=='4esoa'){$grupobien='4� ESO A';}
if ($grupo=='4esob'){$grupobien='4� ESO B';}
if ($grupo=='4esoc'){$grupobien='4� ESO C';}
if ($grupo=='4esod'){$grupobien='4� ESO D';}
if ($grupo=='4diver'){$grupobien='4� ESO DIVERSIFICACI�N';}
$encabezamiento='CURSO: '.$curso."\n".$grupo."\n".'INFORME DE LA PRIMERA EVALUACI�N'."\n ALUMNO:".$nombrealumno;

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Image('logoclm.jpg',10,10);

$pdf->SetLineWidth(1);
$pdf->Cell(50,10,'');
$pdf->SetFillColor(240,240,240);
$pdf->Multicell(120,10,$encabezamiento,1,'C',1,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'A. GRADO DE CONSECUCI�N DE OBJETIVOS Y COMPETENCIAS B�SICAS.',1,'C',1,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Multicell(180,5,'En funci�n de las calificaciones recogidas en el bolet�n de notas que acompa�a a este informe se considerar� el siguiente baremo:'."\n".'�Calificaci�n de SOBRESALIENTE y NOTABLE: ha superado ampliamente los objetivos y competencias b�sicas seg�n los criterios de evaluaci�n programados.'."\n".'�Calificaci�n de BIEN y SUFICIENTE: ha superado suficientemente los objetivos y competencias b�sicas seg�n los criterios de evaluaci�n programados.'."\n".'�Calificaci�n de INSUFICIENTE: no ha superado los objetivos y competencias b�sicas seg�n los criterios de evaluaci�n programados');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
if ($pend==1) {$pdf->Cell(180,5,'EL ALUMNO TIENE MATERIAS PENDIENTES',0,1);}
$pdf->Ln(5);
$pdf->Cell(180,5,'B. MEDIDAS DE AMPLIACI�N Y REFUERZO',1,'C',1,1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
if ($m1==1) {$pdf->Cell(180,5,$item1,0,1);}
if ($m2==1) {$pdf->Cell(180,5,$item2,0,1);}
if ($m3==1) {$pdf->Cell(180,5,$item3,0,1);}
if ($m4==1) {$pdf->Cell(180,5,$item4,0,1);}
if ($m5==1) {$pdf->Cell(180,5,$item5,0,1);}
if ($m6==1) {$pdf->Cell(180,5,$item6,0,1);}
if ($m7==1) {$pdf->Cell(180,5,$item7,0,1);}
if (!($m1==1|$m2==1|$m3==1|$m4==1|$m5==1|$m6==1|$m6==1|$m7==1)) {$pdf->Cell(180,10,'La junta de evaluaci�n no ha considerado necesarias medidas de ampliaci�n y refuerzo',0,1);}
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'OTRAS MEDIDAS DE AMPLIACI�N Y REFUERZO',0,1);
$pdf->SetFont('Arial','',10);
if ($m8=='') {$pdf->Cell(180,5,'No se consideran necesarias otras medidas de ampliaci�n y refuerzo',0,1);}else{
$pdf->Multicell(180,5,$m8,0,1);}
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Multicell(180,5,'C. INFORMACI�N COMPLEMENTARIA SOBRE LOS OBJETIVOS, CONTENIDOS Y CRITERIOS DE EVALUACI�N DESARROLLADOS EN EL TRIMESTRE',1,1,1);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Multicell(180,5,'La programaci�n de objetivos, contenidos y criterios de evaluaci�n trabajados en el trimestre, en cada una de las materias, est�n a disposici�n de las familias en Jefatura de Estudios y en la p�gina web del centro.');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(180,5,'OBSERVACIONES',0,1);
$pdf->SetFont('Arial','',10);
if ($ob=='') {$pdf->Cell(180,5,'No hay observaciones',0,1);}else{
$pdf->Multicell(180,5,$ob,0,1);}
$pdf->Ln(15);
$pdf->Cell(120,5);
$pdf->Cell(60,5,'El tutor/-a:____________________________');
}
//Determinar un nombre temporal de fichero en el directorio actual
$file = basename(tempnam('.', 'tmp'));
rename($file, $file.'.pdf');
$file .= '.pdf';
//Guardar el PDF en un fichero
$pdf->Output($file, 'F');
//Redirecci�n
header('Location: '.$file);


      ?>
