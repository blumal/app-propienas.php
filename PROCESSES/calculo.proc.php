<?php

    if(isset($_POST['submit'])){
        $cuenta = $_POST['cuenta'];
        $service = $_POST['service'];
        $totalpers = $_POST['totalpers'];
        $calculo = $cuenta * $service / $totalpers;

        if(is_nan($calculo)){
            header("Location:../index.php"); 
        }else {
            header("Location:../index.php?calculo=".$calculo); #Redirección al index
            echo "$calculo € Por persona";
        }
        
    }else{
        header("Location:../index.php"); #Redirección al index
    }
    #header("../index.php?resultado=cuenta&service&totalpers");
?>