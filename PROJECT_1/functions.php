<?php

function print_result($arr){
	$result = '';
	echo "[";
		foreach ($arr as $key => $value) {
			$result .= $value . ',';
		}
		$result = rtrim($result,',');
	echo $result;
	echo "]";
	echo "<br>";
	echo "<a href='index.html'>Check other colors!</a>";
}