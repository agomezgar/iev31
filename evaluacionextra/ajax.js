
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
txt=unescape(xhr.responseText);
txt2=txt.replace(/\+/gi," ");

document.getElementById("alumno").innerHTML=txt2;
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
txt=unescape(xhr2.responseText);
txt2=txt.replace(/\+/gi," ");

document.getElementById("presentadatos").innerHTML=txt2;
}
}
//validar grupo bachillerato

var xhrbach;
function validargrupobach(){

if(window.ActiveXObject){
xhrbach=new ActiveXObject("Microsoft.XMLHttp");
}
else if((window.XMLHttpRequest)||(typeof XMLHttpRequest)!=undefined){
xhrbach=new XMLHttpRequest();
}
else {
alert ("Su navegador no soporta AJAX");
return;
}
enviapeticionalumnobach();
}

function enviapeticionalumnobach(){
xhrbach.open("POST","grabaralumnobach.php",true);
xhrbach.onreadystatechange=procesaresultadoalumnosbach;
xhrbach.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
var datosbach=obtenerdatosalumnobach();

xhrbach.send(datosbach);

}

function obtenerdatosalumnobach(){

var controles=document.forms[0].elements;
var datosbach=new Array();
var cad="";

for (var i=0;i<controles.length;i++){
cad=encodeURIComponent(controles[i].name)+"=";
cad+=encodeURIComponent(controles[i].value);
datosbach.push(cad);
}
cad=datosbach.join("&");
return cad;

}
function procesaresultadoalumnosbach(){
if(xhrbach.readyState==4){
txt=unescape(xhrbach.responseText);
txt2=txt.replace(/\+/gi," ");

document.getElementById("alumno").innerHTML=txt2;
}
}

// validar alumno bachillerato
var xhr2bach;
function validaralumnobach(){
if(window.ActiveXObject){
xhr2bach=new ActiveXObject("Microsoft.XMLHttp");
}
else if((window.XMLHttpRequest)||(typeof XMLHttpRequest)!=undefined){
xhr2bach=new XMLHttpRequest();
}
else {
alert ("Su navegador no soporta AJAX");
return;
}
enviapeticiondatosbach();
}

function enviapeticiondatosbach(){

xhr2bach.open("POST","presentadatosbach.php",true);
xhr2bach.onreadystatechange=procesaresultadodatosbach;
xhr2bach.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
var datos2=obtenerdatos2();

xhr2bach.send(datos2);
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
function procesaresultadodatosbach(){
if(xhr2bach.readyState==4){
txt=unescape(xhr2bach.responseText);
txt2=txt.replace(/\+/gi," ");

document.getElementById("presentadatos").innerHTML=txt2;
}
}

