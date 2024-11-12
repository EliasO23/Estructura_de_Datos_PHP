<?php

    function frecuenciaCaracteres($cadena) {
        $cadena = strtolower($cadena);
        $frecuencia = [];
        for ($i = 0; $i < strlen($cadena); $i++) {
            $caracter = $cadena[$i];
            if ($caracter == " "){
                continue;
            } else{
                if (isset($frecuencia[$caracter])) {
                    $frecuencia[$caracter]++;
                } else {
                    $frecuencia[$caracter] = 1;
                }
            }
            
        }
        return $frecuencia;
    }


    $cadena = "Programacion en Visual Studio con Elias Oliva";
    $frecuencia = frecuenciaCaracteres($cadena);
    
    echo "Frecuencia de caracteres en el texto <strong>'$cadena'</strong>: <br><br>";
    
    foreach ($frecuencia as $caracter => $conteo) {
        echo " - $caracter => $conteo <br>";
    }

    echo "<br> Array Asociativo: <br>";
    print_r($frecuencia);

?>