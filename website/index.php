<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OTH 2k15</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-dialog.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css" media="screen">
		body {
			margin: 0px;
			min-width: 1000px;
			
		}

		.hero { background: url('img/hero-bg.jpg') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 65px 0 300px 0; height: 700px; }
		.hero h1 { font-size: 40px; letter-spacing: 12px; margin: 10px; }
		.hero h1 span { color: #a1a9b0; display: inline-block; }
		.hero p { letter-spacing: 1px; }

		.story {
			height: 700px;
			background: url('img/story.png') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding: 65px 0 300px 0;
		}

		.rules {
			height: 700px;
			background-color: #292421;
		}
		
		.rul {
			color: white;
			width: 500px;
			margin: auto;
			padding-top: 20%;
		}



		.signup {
			height: 700px;
			background-color: #00688B;
			margin-top: -20px;
		}

		.sign {
			color: white;
			width: 600px;
			margin: auto;
			padding-top: 10%;
		}

		.speech {
			width: 600px;
			position: absolute;
			left: 50%;
		}

		.speech p {
			text-align: justify;
			font-size: 17px;
		}
	</style>

</head>

<body>
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
      <a class="navbar-brand" href="#">OTH 2k15</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-right" id="login">
        <div class="form-group">
          <input type="text" name="tname" id="tname" class="form-control" placeholder="Team Name">
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
        </div>
        <button type="button" id="loginButton" class="btn btn-primary">login</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="hero">
	<div id="container">
		<div class="container" style="vertical-align: middle">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 style="margin-top: 250px;"><span>ONLINE</span> TREASURE <span>HUNT</span></h1>
                </div>
              </div>
        </div>      
	</div>
</div>

<div class="story">
	<div class="speech">
		<h1 align="center">Welcome</h1>
		<p>Hey there!! They call me The Old Chap and I love Dinos but its nice to see you again, Its been a while, Some call you "The Captain", some call you A "Pirate" and Some call You the "Hunter" but you go by many names. So do think you can Find the Treasure this time ?? or Did you Forget what happened the Last time ?? Humm... Something seems different though I can see some spark in your eyes this time or is that just my green eyes ?? we'll soon find out,   So I hope your ready. All the Best!</p>
	</div>
</div>
<div class="rules">
	<div class="rul">
		<h1 align="center">Rules</h1>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>	
</div>


<div class="signup">
	<div class="sign">
		<h1 align="center">Sign Up</h1>
		<form id="signup">

			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
                        <input type="text" name="teamname" id="teamname" class="form-control input-lg" placeholder="Team Name" tabindex="1">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">		
					<div class="form-group">
                        <input type="password" name="pwd1" id="pwd1" class="form-control input-lg" placeholder="*Password" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<input type="password" name="pwd2" id="pwd2" class="form-control input-lg" placeholder="*Re-Enter Password" tabindex="1">
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">		
					<div class="form-group">
                        <input type="text" name="p1" id="p1" class="form-control input-lg" placeholder="*Player 1" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<input type="text" name="p1n" id="p1n" class="form-control input-lg" placeholder="*Mobile" tabindex="1">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">		
					<div class="form-group">
                        <input type="text" name="p2" class="form-control input-lg" placeholder="Player 2" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<input type="text" name="p2n" class="form-control input-lg" placeholder="Mobile" tabindex="1">
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col-xs-12">		
					<div class="form-group">
                        <input type="password" name="mpwd" id="mpwd" class="form-control input-lg" placeholder="*Master Password" tabindex="1">
					</div>
				</div>
			</div>

			<div class="row">
				<div style="float: right;">
					<button type="reset" class="btn btn-danger">Reset</button>
					<button type="button" class="btn btn-success" id="signupsubmit">Submit</button>
				</div>
			</div>

			



		</form>
	</div>
</div>

	
    <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap-dialog.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/work.js" type="text/javascript" charset="utf-8"></script>
	
</body>
</html>