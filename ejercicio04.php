<?php

    function imprimirPiramide($filas) {
        echo "<pre>"; 
        for ($i = 1; $i <= $filas; $i++) {
            // Espacios para centrar la pirámide
            echo str_repeat(" ", $filas - $i);
            
            // Asteriscos
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                echo "*";
            }
            
            echo "\n";
        }
        echo "</pre>";
    }


    $filas = 10;
    imprimirPiramide($filas);
?>