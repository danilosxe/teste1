<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $inicial = $_POST['inicial'];
    $final = $_POST['final'];

    function primos($inicial, $final){
        $numerosPrimos = array();
        $contador = 0;
        for($i=$inicial+1; $i < $final; $i++){
            
            for($e = 1; $e < $final; $e++){
                if($i % $e == 0){
                    $contador++;
                }
                if($contador > 2){
                    $contador = 0;
                    $e = $final;
                }
            }
            if($contador == 2){
                array_push($numerosPrimos, $i);
                $contador = 0;
            }
        }
        echo 'Numeros de ' . $inicial . " a " . $final . '<br>';
        if(count($numerosPrimos) == 0){
            echo 'Encontrados '. count($numerosPrimos).' números primos';
        }
        else if(count($numerosPrimos) == 1){
            echo 'Encontrado'. count($numerosPrimos).' número primo, è ele: ';
        }
        else if(count($numerosPrimos) >1){
            echo 'Encontrados '. count($numerosPrimos).' números primos, são eles: ';
        }

        foreach( $numerosPrimos as $key => $n) {
            echo $n.', ';
        }

    }
    primos($inicial, $final);
    
    ?>
    <p> </p>
</body>
</html>