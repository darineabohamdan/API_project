<?php
  

$x=$_POST["x"];
$y=$_POST["y"];
$answer=2*$x + $y%2;
$array=["answer"=> $answer];


echo json_encode($array);





?>