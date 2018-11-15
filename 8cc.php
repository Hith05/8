
<?php
$array1 = array(
    array(1, 2,9),
    array(3, 4,5),
    array(5, 6,7)
);

$array2 = array(
    array(3, 2,0),
    array(6, 4,2),
    array(1, 3,1)
);

echo "<h2> Matrix1 </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$array1[$row][$col];
  }
}
echo "<h2> Matrix2 </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$array2[$row][$col];
  }
}
$result=array();
echo "<h2> addition of matrices </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
$result[$row][$col] = $array1[$row][$col] + $array2[$row][$col];
    echo " ".$result[$row][$col];
  }
}
?>
