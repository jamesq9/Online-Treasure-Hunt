<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once("connection.php");
$qp_array = array(3,3,1,3,2,2,2,1,2,2,1,2,2,1);
		$stmt2 = $conn->prepare("SELECT qp,cq FROM players WHERE tn=?"); 
	 	$stmt2->bind_param("s", $_SESSION["user"]);
	 	$stmt2->execute();
		$stmt2->bind_result($qp,$cq);
        $stmt2->fetch();
        $stmt2->close();

		$stmt2 = $conn->prepare("SELECT sno FROM answers WHERE question=? and answer=?");
	 	$var1 = $cq."".$qp;
	 	$var2 = trim(strtolower($_POST["ans"]) , " \t"); 
	 	$stmt2->bind_param("ss",$var1,$var2);
	 	$stmt2->execute();
		$stmt2->bind_result($sno);
        $stmt2->fetch();
        $stmt2->close();

        if( $sno == NULL ) {
        	echo "0";
        } else {
        	$stmt2 = $conn->prepare("UPDATE players SET qp=?,cq=cq+1,pt=now() WHERE tn=?");
        	$var0 = $qp_array[$cq];
        	$var1 = rand(1,$var0);
        	$stmt2->bind_param("ss", $var1,$_SESSION["user"]);
        	$stmt2->execute();
        	$stmt2->close();
        	echo "1";
        }



?>