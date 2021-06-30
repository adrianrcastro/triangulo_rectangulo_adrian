<!-- Realice un programa en PHP que permita calcular la hipotenusa del triangulo rectángulo de lados 3 cm y 4 cm -->
<link rel="stylesheet" href="style.css" type="text/css">

<?php
    $hipotenusa = 0;
    $catetoOpuesto = 3;
    $catetoAdyacente = 4;

    $hipotenusa = sqrt(pow($catetoOpuesto,2) + pow($catetoAdyacente,2));

    echo "<h1 align='center'>Resultado de la hipotenusa de un triángulo rectángulo</h1>";
    echo "<h3 align='center'>Cateto Opuesto: $catetoOpuesto</h3>";
    echo "<h3 align='center'>Cateto Adyacente: $catetoAdyacente</h3>";
    echo "<h3 align='center'>Hipotenusa: $hipotenusa</h3>";
?>