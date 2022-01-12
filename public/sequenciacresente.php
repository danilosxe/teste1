<?php 
$array = explode(",", $_POST['a'][0]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>4 - Função SequenciaCrescente($array)</h1>
<form action="./sequenciacresente.php" method="post">
        <input type="text" autocomplete="off" name="a[]" placeholder="Ex: 1,10,2,3,4" >
        <input type="submit" />
    </form>  
</body>
</html>
<?php 

function sequenciaCresente($array){

    $naoRepete = array();
    $sequencia = array();
    for($i=0; $i<count($array); $i++){

        for($e=0; $e<count($array); $e++){
   
            if($array[$i] == $array[$e] && $i != $e){
     
                array_push($naoRepete, $array[$i]); 

            }

        }
        if(count($naoRepete) > 2){
            echo 'false';
            return;
           
        } 
        else if($sequencia[count($sequencia) -1] < $array[$i] && $array[$i] < $array[$i+1] && $array[$i+1] > $array[$i]){
            array_push($sequencia, $array[$i]);
         
        } 
        else if($sequencia[count($sequencia) -1] < $array[$i] && $sequencia[count($sequencia) -1] >= $array[$i+1] && $array[$i+1] <= $sequencia[count($sequencia) -1 ]){
            array_push($sequencia, $array[$i]);
         
        }      
        else if(isset($sequencia[0]) && $array[$i] > $sequencia[count($sequencia) -1 ] && $i == (count($array) -1)){
            array_push($sequencia, $array[$i]); 
        }    
        else if(count($array) == 2){
            echo 'true';
            return;
        }  
    
    }
    if((count($array) - count($sequencia)) > 1){
        echo 'false';
    }
    else{
        echo 'true';
    }
}  

if(!empty($array[0])){
    foreach( $array as $key => $n) {
        echo $n.', ';
        }
sequenciaCresente($array);
}
?>
