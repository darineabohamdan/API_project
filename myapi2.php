<?php


$string=$_POST["string"];


if($string == strrev($string)) {
    $array= ["string" => "Palindrome"];
        echo json_encode($array);
        
} else if ($string != strrev($string)){
    $array=["string" => "NotPalindrome"];
        echo json_encode($array);
    
}




?>
