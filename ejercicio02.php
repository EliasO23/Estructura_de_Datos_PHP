<?php

    function sumaPares($numeros) {
        $suma = 0;
        $numerosPares = [];
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                
                $suma += $numero;
                $numerosPares[] = $numero; 
            }
        }
        return [
            'suma' => $suma,
            'numerosPares' => $numerosPares
         ];
    }

    $numeros = [34, 50, 11, 1, 3, 15, 90, 4, 67, 53, 80];
    $resultado = sumaPares($numeros);

    echo "Los numeros son: " . implode(", ", $numeros) . "<br><br>";
    echo "Los numeros pares son: <br>" . implode(" + ", $resultado['numerosPares']) . "<br>";
    echo "Suma: " . $resultado['suma'] . "<br>";

?>