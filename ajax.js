
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
//validar grupo

var xhr;
function validargrupo(){
if(window.ActiveXObject){
xhr=new ActiveXObject("Microsoft.XMLHttp");
}
else if((window.XMLHttpRequest)||(typeof XMLHttpRequest)!=undefined){
xhr=new XMLHttpRequest();
}
else {
alert ("Su navegador no soporta AJAX");
return;
}
enviapeticionalumno();
}

function enviapeticionalumno(){
xhr.open("POST","grabaralumno.php",true);
xhr.onreadystatechange=procesaresultadoalumnos;
xhr.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
var datos=obtenerdatosalumno();

xhr.send(datos);
}

function obtenerdatosalumno(){
var controles=document.forms[0].elements;
var datos=new Array();
var cad="";

for (var i=0;i<controles.length;i++){
cad=encodeURIComponent(controles[i].name)+"=";
cad+=encodeURIComponent(controles[i].value);
datos.push(cad);
}
cad=datos.join("&");
return cad;
}
function procesaresultadoalumnos(){
if(xhr.readyState==4){
document.getElementById("alumno").innerHTML=xhr.responseText;
}
}

// validar alumno
var xhr2;
function validaralumno(){
if(window.ActiveXObject){
xhr2=new ActiveXObject("Microsoft.XMLHttp");
}
else if((window.XMLHttpRequest)||(typeof XMLHttpRequest)!=undefined){
xhr2=new XMLHttpRequest();
}
else {
alert ("Su navegador no soporta AJAX");
return;
}
enviapeticiondatos();
}

function enviapeticiondatos(){
xhr2.open("POST","presentadatos.php",true);
xhr2.onreadystatechange=procesaresultadodatos;
xhr2.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
var datos2=obtenerdatos2();

xhr2.send(datos2);
}

function obtenerdatos2(){
var controles2=document.forms[0].elements;
var datos2=new Array();
var cad2="";

for (var i=0;i<controles2.length;i++){
cad2=encodeURIComponent(controles2[i].name)+"=";
cad2+=encodeURIComponent(controles2[i].value);
datos2.push(cad2);
}
cad2=datos2.join("&");
return cad2;

}
function procesaresultadodatos(){
if(xhr2.readyState==4){
document.getElementById("datos").innerHTML=xhr2.responseText;
}
}


// validar grupo para impresion individual
var xhr3;
function impindgrupo(){
if(window.ActiveXObject){
xhr3=new ActiveXObject("Microsoft.XMLHttp");
}
else if((window.XMLHttpRequest)||(typeof XMLHttpRequest)!=undefined){
xhr3=new XMLHttpRequest();
}
else {
alert ("Su navegador no soporta AJAX");
return;
}
enviapeticion3();
}

function enviapeticion3(){
xhr3.open("POST","imprimeindividualalumno.php",true);
xhr3.onreadystatechange=procesaresultado3;
xhr3.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
var datos3=obtenerdatos3();

xhr3.send(datos3);
}

function obtenerdatos3(){
var controles3=document.forms[0].elements;
var datos3=new Array();
var cad3="";
for (var i=0;i<controles3.length;i++){
cad3=encodeURIComponent(controles3[i].name)+"=";
cad3+=encodeURIComponent(controles3[i].value);
datos3.push(cad3);
}
cad3=datos3.join("&");
return cad3;

}
function procesaresultado3(){
if(xhr3.readyState==3){
document.getElementById("alumno").innerHTML=xhr3.responseText;
}
}

// validar curso
var xhr4;
function validarcurso(){
if(window.ActiveXObject){
xhr4=new ActiveXObject("Microsoft.XMLHttp");
}
else if((window.XMLHttpRequest)||(typeof XMLHttpRequest)!=undefined){
xhr4=new XMLHttpRequest();
}
else {
alert ("Su navegador no soporta AJAX");
return;
}
enviapeticion4();
}

function enviapeticion4(){
xhr4.open("POST","presentadatos.php",true);
xhr4.onreadystatechange=procesaresultado4;
xhr4.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
var datos4=obtenerdatos4();
xhr4.send(datos4);
}

function obtenerdatos4(){
var controles=document.forms[0].elements;
var datos4=new Array();
var cad4="";
for (var i=0;i<controles.length;i++){
cad4=encodeURIComponent(controles[i].name)+"=";
cad4+=encodeURIComponent(controles[i].value);
datos4.push(cad4);
}
cad=datos4.join("&");
return cad4;

}
function procesaresultado4(){
if(xhr4.readyState==3){
document.getElementById("datos").innerHTML=xhr4.responseText;
}
}
