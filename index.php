<?php

$arr = [1,5,6,7,14];
$arr2 = [2,5,9,7,12,14];

$arr3 = [];
foreach($arr as $ar)
{
    foreach($arr2 as $ar2)
    {
        if($ar === $ar2 )
        {
            array_push($arr3, $ar);
        }
    }
   
    
}


print_r($arr3);
