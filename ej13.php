<?php
/*Aplicación No 13 (Arrays asociativos II)
Cargar los tres arrays con los siguientes valores y luego ‘juntarlos’ en uno. Luego mostrarlo por
pantalla.
“Perro”, “Gato”, “Ratón”, “Araña”, “Mosca”
“1986”, “1996”, “2015”, “78”, “86”
“php”, “mysql”, “html5”, “typescript”, “ajax”
Para cargar los arrays utilizar la función array_push. Para juntarlos, utilizar la función
array_merge.*/

$vec1 = array("Perro", "Gato", "Ratón", "Araña", "Mosca");
$vec2 = array("1986", "1996", "2015", "78", "86");
$vec3 = array("php", "mysql", "html5", "typescript", "ajax");

var_dump(array_merge($vec1,$vec2,$vec3)); // AVERIGUAR //NOT SURE