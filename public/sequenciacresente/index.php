<?php 
$array = $_POST['a'];
var_dump($array);
?>

<?php 

function sequenciaCresente($array){
    
    //print_r($array);
    $contador = 0;
    $naoRepete = array();
    $sequencia = array();
    for($i=0; $i<count($array); $i++){

        for($e=0; $e<count($array); $e++){
            //sort($array);
            if($array[$i] == $array[$e] && $i != $e){
                //echo $array[$i] .'e' . $array[$e] . $i . $e . '<br>';
                /*if($contador > 2){
                    echo $e;
                    $contador = 0;
                    $e = count($array);
                    //array_push($naoRepete, $array[$i]);                    
                }*/
                array_push($naoRepete, $array[$i]); 
                //$contador++;
            }

        }
        if(count($naoRepete) > 2){
            //echo 'A sequencia não é possivel <br>';
            //print_r($naoRepete);
            //$i = count($array);
            //print_r($array);
            echo 'false';
            return;
           //$contador = 0;
           
        }   
        else if($array[$i] > $array[$i-1] && isset($array[$i-2]) and $array[$i] > $array[$i-2]){
            array_push($sequencia, $array[$i]); 
        }        
        else if($array[$i] > $sequencia[count($sequencia) -1 ]){
            array_push($sequencia, $array[$i]); 
        }      
    
    }
    if((count($array) - count($sequencia)) > 1){
        print_r($array);
        echo 'false';
    }else{
        print_r($array);
        echo 'true';
    }
    //print_r($array);
    //echo 'true';
    //print_r($array);
    /*for($d=0; $d<count($array); $d++){
        
        if($array[$d+1] == ($array[$d] + 1) && ($array[$d] - 1) == $array[$d-1]){
            echo $d;
            array_push($sequencia, $array[$d]); 
        }elseif(($array[$d] - 1) == $array[$d-1] && $sequencia[count($sequencia)-1] == ($array[$d] - 1)){
            echo $d;
            array_push($sequencia, $array[$d]); 
        }
   
    }

    if(count($sequencia) >= 2){
        print_r($array);
        echo 'true';
    }
    else if(count($sequencia) < 2){
        print_r($array);
        echo 'false';
    }
    else if(count($sequencia) == (count($array) - 3)){
        print_r($array);
        echo 'false';
    }*/
    print_r($sequencia);
   

}  

if(isset($array)){
sequenciaCresente($array);
}
?>
