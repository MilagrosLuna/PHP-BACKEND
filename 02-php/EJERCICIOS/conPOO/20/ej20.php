<?php
/*La clase Punto ha de tener dos atributos privados con acceso de sólo lectura (sólo con getters),
que serán las coordenadas del punto. Su constructor recibirá las coordenadas del punto.
La clase Rectangulo tiene los atributos privados de tipo Punto _vertice1, _vertice2, _vertice3 y
_vertice4 (que corresponden a los cuatro vértices del rectángulo).
La base de todos los rectángulos de esta clase será siempre horizontal. Por lo tanto, debe tener un
constructor para construir el rectángulo por medio de los vértices 1 y 3.
Los atributos ladoUno, ladoDos, área y perímetro se deberán inicializar una vez construido el
rectángulo.
Desarrollar una aplicación que muestre todos los datos del rectángulo y lo dibuje en la página.
 */
require_once "punto.php";
require_once "rectangulo2.php";
$v1 = new punto(0, 0);
$v3 = new punto(4, 3);
$rectangulo = new rectangulo2($v1, $v3);
echo $rectangulo->Dibujar();
echo "<br><br>";
$v1 = new punto(0, 0);
$v3 = new punto(3, 17);
$rectangulo = new rectangulo2($v1, $v3);
echo $rectangulo->Dibujar();



?>