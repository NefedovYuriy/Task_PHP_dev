<?php

$intArray = [5 , 2 , 156 , 225 , 0 , 651 , 2000 , 682 ]; // 'ASD2', 0.2 Ok 

for($i=0; $i<count($intArray) ; $i++){
    $strValue = "$intArray[$i]";
    $pos = strpos($strValue, "2");

    if($pos !== false){
        $intArray[$i] = $strValue.'$a';
    };
    echo $intArray[$i].'</br>';
};
?>

