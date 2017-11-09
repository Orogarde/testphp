<?php
$x=10;
$tab=array(5,6,18);
echo $x;
echo "Bonjour".$x;
foreach ($tab as $value) 
{
    if($value>15)echo $value;
}



$tab=array();
for ($i=0; $i < 100; $i++) { 
    $tab[]=rand(0,100);
}
foreach ($tab as $value )
 {
    echo $value." ";
}
?>