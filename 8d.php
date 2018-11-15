<?php
$a = array(
    array(1, 2,9),
    array(3, 4,5),
    array(5, 6,7)
);

$b = array(
    array(3, 2,0),
    array(6, 4,2),
    array(1, 3,1)
);

echo "<h2> Matrix1 </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a[$row][$col];
  }
}
echo "<h2> Matrix2 </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$b[$row][$col];
  }
}

$result=array();
echo "<h2> Multiplication of matrices </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
 $c[$row][$col]=0;
        for($k=0;$k<3;$k++)
        {

            $c[$row][$col]=$c[$row][$col]+($a[$row][$k]*$b[$k][$col]);
        }
 echo " ".$c[$row][$col];
}
}

?>
