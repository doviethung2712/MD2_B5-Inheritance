<?php
include_once 'Point.php';
include_once 'MoveablePoint.php';

$a = new MoveablePoint(1, 2, 3, 4);
print_r($a->getXY());
echo '<br>';
echo $a->toString();
echo "<br>";
print_r($a->getSpeed());