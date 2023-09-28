<?php
        
    $user = $_POST ["user"];
    $pass = $_POST ["pass"];


    $ckuser = "admin";
    $ckpass = 1234;


    if ($user==$ckuser && $pass == $ckpass) {
        echo "Correcto"; 
        header ("location:https://www.potrerodigital.org/");
        exit;
        echo "<br>";
        echo "<br>";
    }   else {
        echo "incorrecto";
        echo "<br>";
    }
?>
