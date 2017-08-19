<?php

include_once("connection.php");

if( strcmp($_POST['mpwd'] , "BMX") == "0" ) {

$stmt = $conn->prepare("INSERT INTO teamprofile (tn, tp, p1, p1n, p2, p2n) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $_POST['teamname'], $_POST['pwd1'], $_POST['p1'],$_POST['p1n'],$_POST['p2'],$_POST['p2n']);
$stmt->execute();
	echo "1";

} else {
	echo "0";
}

?>