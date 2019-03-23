<?php
$rangestart = $_POST['rangestart'] ; 
$rangestop = $_POST['rangestop'] ; 
$url = "http://dpsbokaro.net/sopanschool2.0/uploads/";
$ext = ".jpg" ; 
for ($rangestart  = $rangestart ; $rangestart<=$rangestop ; $rangestart++) {

    $initialurl = "$url$rangestart$ext" ;
    echo ('<img src  = "'.$initialurl.'">');
}




?>

