<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Exercice :second projet avec Git  </h1>
 <?php
$x=10;
$tab=array(5,6,18);
//echo $x;
//echo "Bonjour".$x;
foreach ($tab as $value) 
{
  //  if($value>15)echo $value;
}
$tab=array();
for ($i=0; $i < 100; $i++) { 
    $tab[]=rand(0,100);
}
//foreach ($tab as $value )
//{
  //  echo $value." ";
//}
$com=0;
for ($j=0; $j <100 ; $j++) { 

    for ($i=0; $i <100; $i++) { 
        if ($tab[$i] == $j) 
        { 
            $com++;
            
        }
    }
   
        echo "la valeur ". $j ."est presente". $com;
        echo "<br>";
        $com=0;
    
}



?>   
</body>
</html>
