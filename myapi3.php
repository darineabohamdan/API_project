<?php

$string=$_POST["string"];
$new_str = str_replace(' ', ' ', $string);
$array= ["string" => $new_str];
echo json_encode($array);




?>