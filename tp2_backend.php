<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 2 Back end.</title>
</head>

<body>
    
    <h1>Trabajo practico 2 back end</h1>

    <?php

        // 1-
        $n = 7;

        if ( $n > 0 ) {
            print "El numero es positivo";
            echo "<br>";
            echo "<br>";
        }
        else {
            print "El numero es negativo o 0";
            echo "<br>";
            echo "<br>";
        }

        //2-
        
        if ($n > 1 & $n < 10) {
            print "El numero se encuentra entre 1 y 10";
            echo "<br>";
            echo "<br>";
        }   else {
            print "El numero no cumple las condiciones";
            echo "<br>";
            echo "<br>";
        }

        //3-
        if ($n < 2 || $n > 10 ) {
            print "El numero es menor a 2 o mayor a 10";
        }   else {
            print "El numero no cumple las conidiciones";
            echo "<br>";
            echo "<br>";
        }

        //4-
        $numero1 = 5;
        $numero2 =9;
        
        $suma = $numero1 + $numero2 ;
        $resta = $numero1 - $numero2 ;
        
        $multiplicacion = $numero2 * $numero1 ;
        $division = $numero2 / $numero1 ;
        $resto = $numero2 % $numero1 ;

        if ($numero1 > $numero2 ) {
            
            print "numero1 es mayor que numero2";
            echo "<br>";
            
            print "Suma: $numero1 + $numero2 = $suma";
            echo "<br>";
            
            print "Resta: $numero1 - $numero2 = $resta";
            echo "<br>";
            echo "<br>";
        }   
        elseif ($numero2 > $numero1) {
            
            print "numero 2 es mayor que numero1";
            echo "<br>";
            
            print "Multiplicacion: $numero2 * $numero1 = $multiplicacion";
            echo "<br>";
           
            print "Division: $numero2 / $numero1 = $division";
            echo "<br>";
            
            print "Resto: $numero2 % $numero1 = $resto";
            echo "<br>";
            echo "<br>";
        }



    ?>


</body>

</html>