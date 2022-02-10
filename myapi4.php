<?php
  

$string=$_POST["string"];
$small= "must contain minimum 8 characters ";
$not_secure="does not contain at least 1 number and 1 letter";
$secure="is secure";
if (strlen($input) < 8)
{
$array=["string"=> $small];
echo json_encode($array);
}
else 
if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $string))
{
   
    $array= ["string" => $not_secure];
    echo json_encode($array);
}
else {
    $array=["string" => $secure];
    echo json_encode($array);
}


?>