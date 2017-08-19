<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once("connection.php");

$qp_array = array(3,3,1,3,2,2,2,1,2,2,1,2,2,1);

if( $stmt = $conn->prepare("SELECT tp FROM teamprofile WHERE tn=?") ) {
	 $stmt->bind_param("s", $_POST["tname"]);
	 $stmt->execute();
	 $stmt->bind_result($tp);
	 $stmt->fetch();
	 $stmt->close();

	 if( strcmp($tp,$_POST['pass']) == 0 ) {
	 	if ( $stmt2 = $conn->prepare("SELECT li FROM players WHERE tn=?") ) {
	 	$stmt2->bind_param("s", $_POST["tname"]);
	 	$stmt2->execute();
		$stmt2->bind_result($li);
        $stmt2->fetch();
        $stmt2->close();
        if($li == NULL ) {
        	$stmt3 = $conn->prepare("INSERT INTO players(tn, qp, cq, li, lo, pt) VALUES (?,?,?,NOW(),NOW() + INTERVAL 90 MINUTE,NOW())");
        	$var1 = rand(1,$qp_array[0]);
        	$var2 = 1;
        	$stmt3->bind_param("sdd", $_POST["tname"], $var1 , $var2 );
	 		$stmt3->execute();
			$stmt3->close();
        }
   } else {
   	printf("Errormessage: %s\n", $conn->error);
   }
	 	$_SESSION['user']=$_POST["tname"];
	 	echo "1";
	 } else {
	 	echo "0";
	 }
} else {
	echo "0";
}

?>