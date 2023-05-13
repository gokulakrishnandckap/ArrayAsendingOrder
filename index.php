<?php



$input = [1,5,2];
$value = [];
for ($i=0;$i<count($input);$i++)
{
    if($input[$i] > $input[$i+1])
    {
         die();
    }
    else{
        $value1 = $input[$i];
        $value2 = $input[$i+1];
        $input[$i] = $value2;
        $input[$i+1] = $value1;

    }
    array_push($value,$input);
    print_r($value);
//    die();
}