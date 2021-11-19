<?php
$a = $_POST['numero1'];
$b = $_POST['numero2'];
$c = $_POST['numero3'];

if($a>$b)
    if ($b>$c){
        echo $a.'>'.$b.'>'.$c;}
    else
        if($b==$c){
            echo $a.'>'.$b.'='.$c;} 
        else/*if($c>$b)*/
            if($a>$c){
               echo $a.'>'.$c.'>'.$b;}
            else
                if($c>$a){
                   echo $c.'>'.$a.'>'.$b;}
                else {echo $a.'='.$c.'>'.$b;}
else
    if($a==$b)
        if($b>$c){
            echo $a.'='.$b.'>'.$c;}
        else 
            if($b==$c){
                echo $a.'='.$b.'='.$c;}
            else {echo $c.'>'.$a.'='.$b;} /*($c>$b), que seria lo mismo que c>a*/
    else /*Se tiene en cuenta que el else el ($b>$a) ya que es la unica opción*/
        if($a>$c){
         echo $b.'>'.$a.'>'.$c;}
        else
            if($a==$c){
              echo $b.'>'.$a.'='.$c;}
            else/*($c>$a)y b>a*/
                if($b>$c){
                   echo $b.'>'.$c.'>'.$a;}
                else 
                    if($c>$b) 
                      {echo $c.'>'.$b.'>'.$a;}/*b>c*/
                    else {echo $b.'='.$c.'>'.$a;} /*$b==$c*/
                    
  /*FUNCIONA*/
            
            
            
?>
