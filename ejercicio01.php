<?php
    function listaInvertida($array) {
        $invertida = [];
        for ($i = count($array) - 1; $i >= 0; $i--) {
            $invertida[] = $array[$i];
        }
        return $invertida;
    }


    $array = [6, 90, 3, 1, 67, 23, 7, 100, 8, 34, 92];
    $resultado = listaInvertida($array);

    echo 'Problema de Lista Invertida'. '<br><br>';
    echo "Lista original: " . implode(", ", $array) . "<br>";
    echo "Lista invertida: " . implode(", ", $resultado) . "<br>";
?>
