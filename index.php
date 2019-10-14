<?php

$rand = rand (1,55);

$guess =  $_POST ('guess');
$submit = $_POST('submit');

if(isset ($submit)) {
    if($guess<1 || $guess>23) 
    echo "your guess must be a number between 1 and 23!";
}else{
    if($guess!=$rand){
        echo "Incorrect,the correct answer is" . $rand;
    }else{
echo"That is correct!";
    }
}