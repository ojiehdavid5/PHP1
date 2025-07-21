<?php
$int=8;
$float=8.0;
echo "Integer: $int\n";
echo "Float: $float\n";
$age = 80;
if ($age < 20) {
echo "You are a teenager";
}else{
    echo "You are an adult";
}
for ($i=0; $i < 5; $i++) {
echo "This is loop number $i\n";
}

$var= array(1, 2, 3, 4, 5);
foreach ($var as $value) {
    echo "Value: $value\n";
}

$namesAge = array("Fabio"=>"20"
,
"Klevi"=>"16"
,
"John"=>"43"); 
?>