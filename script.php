<?php

$file = file_get_contents('text.txt');
$fileCharacter = str_split($file);

$ifTrue = true;

while($ifTrue){
    for($i=0; $i < count($fileCharacter)-1; $i++){
        $lowerCase1 = strtolower($fileCharacter[$i]);
        $lowerCase2 = strtolower($fileCharacter[$i+1]);
        if($lowerCase1 == $lowerCase2){
            if(ctype_upper($fileCharacter[$i]) == ctype_lower($fileCharacter[$i+1])){
                array_splice($fileCharacter, $i, 2);
            break;
            }
        if(ctype_lower($fileCharacter[$i]) == ctype_upper($fileCharacter[$i+1])){
                array_splice($fileCharacter, $i, 2);
        break;
            }
        }
    }
    $ifTrue = possible($fileCharacter);
}

function possible($fileCharacter){
    for($i=0; $i < count($fileCharacter)-1; $i++){
        $lowerCase1 = strtolower($fileCharacter[$i]);
        $lowerCase2 = strtolower($fileCharacter[$i+1]);
        if($lowerCase1 == $lowerCase2){
            if(ctype_upper($fileCharacter[$i]) == ctype_lower($fileCharacter[$i+1])){
                return true;
            }
        if(ctype_lower($fileCharacter[$i]) == ctype_upper($fileCharacter[$i+1])){
            return true;
            }
        }
    }
    return false;
}

echo possible($fileCharacter);




echo count($fileCharacter);
?>