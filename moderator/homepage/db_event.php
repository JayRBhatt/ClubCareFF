<?php

function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","club");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	  echo "<p class='updated' style=' font-family: Tw Cen MT,ROBOTO,helvetica; margin-left:43%; color: rgb(86, 132, 46); width: 200px; background-color: rgb(216, 235, 198); text-align: center; border-radius:20px; padding: 5px 5px;'>Event Posted!</p>";
}
?>
