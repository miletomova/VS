<?php
/* Определете дали годината е високосна или не. 
	За да е високосна, годината трябва да се дели на 4, 
	но ако се дели на 100 не е високосна, 
	с изключение на случая ако се дели на 400. */


$y = 1600;

$l_y = "Leap year";
$nl_y = "Not a leap year";

if ($y % 100 === 0 && $y % 400 !== 0) {
	echo $nl_y;
} elseif ($y % 100 === 0 && $y % 400 === 0) {
	echo $l_y;
} elseif ($y % 4 == 0) {
	echo $l_y;
} else {
	echo $nl_y;
}