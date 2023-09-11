<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo Practico N° 1.</h1>    

    <?php
    //Ejercicios
    //1-
    echo "Hola mundo";
    echo "<br>";

    //2-
    $var1 = "Hola mundo";
    echo $var1;
    echo "<br>";

    //3
    $entero1 = 17;
    $entero2 = 5;

    echo $entero1+$entero2;
    echo "<br>";
    echo $entero1-$entero2;
    echo "<br>";
    echo $entero1*$entero2;
    echo "<br>";
    echo $entero1/$entero2;
    echo "<br>";
    echo $entero1%$entero2;
    echo "<br>";


    //4-
    $C = 20;
    $farenheit =($C *9/5)+32;

    echo $farenheit;
    echo "<br>";
    echo "<br>";
    echo "<br>";


    //5-
    $b = 18;
    $a = 12;

    $P = 2*$a + 2*$b;
    $A = $a * $b;

    echo "Rectangulo";
    echo "<br>";
    echo "Perimetro: $P";
    echo "<br>";
    echo "Area: $A";
    echo "<br>";
    echo "<br>";


    //6-
    $radio = 30;
    $diametro = 2*$radio;

    $perimetro = 2 * 3.14 * $diametro;
    $area = 3.14* $radio * $radio;


    print "Circulo";
    echo "<br>";
    print "Perimetro: $perimetro";
    echo "<br>";
    print "Area: $area";







    ?>

</body>

</html>