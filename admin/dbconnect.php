<?php

include '../../dbconnect.php';

function getDataFromDB($sql){
	include '../../dbconnect.php';
	$result = mysqli_query($db, $sql)or die(mysqli_error($db));
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
}