<?php
// По зададени 3 страни определете дали с тях може да се построи триъгълник;
// a + b > c;
// a + c > b;
// b + c > a;

$a = 58;
$b = 10;
$c = 36;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a ) {
	echo "Yes";
} else {
	echo "No";
}