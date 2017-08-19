<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['user'])) {
	header("location: index.php");
	die();
}

include_once("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OTH2k15</title>
	<title>OTH 2k15</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-dialog.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css" media="screen">
	    
        #main {
            margin-top: 60px;
            width: 650px;
            height: 600px;
			margin-left: auto;
            margin-right: auto;
        }

        #main > img {
            vertical-align: middle;
            width: 600px;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        

    
	</style>
</head>
<body>

<?php

if ( $stmt2 = $conn->prepare("SELECT qp,cq,li,lo FROM players WHERE tn=?") ) {
	 	$stmt2->bind_param("s", $_SESSION["user"]);
	 	$stmt2->execute();
		$stmt2->bind_result($qp,$cq,$li,$lo);
        $stmt2->fetch();
        $stmt2->close();
   		
        $stmt3 = $conn->prepare("SELECT  imagename, hint FROM questions WHERE q=?");
        $question = $cq."".$qp;
        $stmt3->bind_param("s", $question);
	 	$stmt3->execute();
		$stmt3->bind_result($imagename,$hint);
        $stmt3->fetch();
        $stmt3->close();

        $stmt3 = $conn->prepare("SELECT  now()  FROM DUAL");
        $stmt3->execute();
		$stmt3->bind_result($curtime);
        $stmt3->fetch();
        $stmt3->close();

   } else {
   
   	printf("Errormessage: %s\n", $conn->error);
   
   }


?>

<!-- HINT -->
<?php echo "<!-- ".$hint." -->\n"?>
<!-- /HINT -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">OTH</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Contest</a></li>
        <li><a href="#">Leaderboard</a></li>
        <li><a href="#"><b><span>Time Left : </span><span id="clock"></span></b></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome <?php echo $_SESSION['user']; ?></a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>





	<div id="main">
		<img src=<?php echo "img/".$imagename.".png"?> alt="">
		<form class="form-horizontal" id="answerForm">
			<fieldset>


			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-11 control-label" for="ans"></label>  
			  <div class="col-md-11">
			  <input id="ans" name="ans" type="text" placeholder="Answer" class="form-control input-md">
			  <div id="error" style="display:none;" class="alert alert-danger"></div>
			  </div>
			</div>

			

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="answerSubmit" type="button" name="submit" class="btn btn-success">Submit</button>
			  </div>
			</div>

			</fieldset>
		</form>


	</div>	

	<script type="text/javascript">
	var ts = {
		li: <?php echo "\"".$curtime."\"" ?>,
		lo: <?php echo "\"".$lo."\"" ?>
	};
	</script>
	<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap-dialog.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/countdown.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/work.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
