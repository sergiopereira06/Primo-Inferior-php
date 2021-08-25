<?php
    $num = $_POST['num'];
    PrimoInferior($num);
    function PrimoInferior($num){
        for($i = 1; $i<$num; $i++){
            if($num%$i == 0){
                $res[] = $num%$i;
                $numeros = count($res);
                if($numeros>2){
                    $numeros = 0;
                    $num--;
                    $i = 1;
                }
            }
        }  
        header('Location: home.php?num='.$_POST['num'].'&numpri='.$num);              
    }
?>