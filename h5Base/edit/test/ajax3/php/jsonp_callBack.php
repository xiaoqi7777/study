<?php
error_reporting(0);
$callback = $_GET['callback'];
$num = $_GET['num'];

$arr1 = array('red', 'green', 'blue', 'yellow','blank');
$arr2 = array('html', 'css', 'js', 'json');

if ($num == '1') {
	echo $callback . '('. json_encode($arr1) .');';
} else {
	echo $callback . '('. json_encode($arr2) .');';
}