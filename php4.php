<?php
function num(){
    static $min=1;
    $max = 100;
    echo $min.'</br> ';
    if($min < $max ){
        $min++;
        num();
    }
}
num();
?>