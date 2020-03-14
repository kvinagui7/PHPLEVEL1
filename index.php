<?php
$array= array("5", "10","15","20");
$num1= "5";
$num2= "10";
$num3= "15";
$num4= "20";

foreach ($array as $loopdata) {
  echo "<br>These are the numbers ".$loopdata;
}
function NewCal($num1,$num2,$num3,$num4){
  $newnum = $num1 * $num2 * $num3 * $num4;
  echo "<br>This is the sum total ".$newnum;
}
NewCal($num1,$num2,$num3,$num4);
?>
