<!DOCTYPE html>
<head>
	<title>Admin Panel |SA_Haider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/style-responsive.css" rel="stylesheet" />
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font.css" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<script src="js/jquery2.0.3.min.js"></script>
</head>

<body>
	<noscript><iframe src="#" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- <div class="app app-aside-fixed m-t-md" id="app"> -->
		<!-- <div class="fade-in-right-big smooth"> -->
			<div class="container w-xxl w-auto-xs">
				<div class="text-center">
					<a href="#">
						<h3 style="margin-top: 30px; padding-bottom: 20px;">Scarlet IT System</h3>
					</a>
				</div>
				<div class="m-b-lg">
				<?php
						
						if(isset($_POST['login'])){
							include_once 'config.php';
                            $username=mysqli_real_escape_string($conn,$_POST['username']);
							$password=mysqli_real_escape_string($conn,sha1($_POST['password']));
							 $sql="Select username from user where username='$username' and password='$password'";
							
						$result=mysqli_query($conn, $sql) or die("Query Failed");
						
						if(mysqli_num_rows($result) > 0){
							while ($row=mysqli_fetch_assoc($result)){
								session_start();
								
								$_SESSION['username'] = $row['username'];
							

								header("location:{$hostname}/admin/index.php");
							}
							
			
						}else{
						
							echo "<div class='alert alert-primary> Email and Password are not Match</div>";
							
					}
						} 
					?>
					<form action="<?php $_SERVER['PHP_SELF'];  ?>" method ="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" name="username" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password"class="form-control" >
						</div>
						<input type="submit"  name="login" class="btn btn-lg btn-primary btn-block"  value="login"  />
						<div class="text-center m-t m-b">
							<a href="/password/recovery">Forgot password?</a>
						</div>
					</form>
					
					<div id="login-text-content" class="panel b-r b-t b-b b-l">
						<div class="panel-body">
							<p style="text-align:center"><span style="color:#E67E22"><strong><span style="font-size:24px">Overview of Scarlet IT System</span></strong></span></p>

							<p style="text-align:center"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">In 2 minutes, take a tour of Scarlet IT System! &nbsp;</span></span></p>

							<p style="text-align:center"><span style="font-size:16px"><span style="font-family:arial,helvetica,sans-serif">See how our easy-to-use CRM - Marketing solution&nbsp;can help!&nbsp;</span></span><br />
								&nbsp;</p>

							<p style="text-align:center"><span style="font-size:16px"><a href="#" target="_blank"><u><strong>CLICK HERE</strong></u></a> to see this ...</span></p>

							<div class="wistia_responsive_padding" style="padding:51.25% 0 0 0;position:relative;">
								<div class="wistia_responsive_wrapper" style="height: 100%; left: 0px; position: absolute; top: 0px; width: 100%; text-align: center;"><a href="#" target="_blank"><img alt="" src="images/12.jfif" style="height:161px; width:250px" /></a></div>
							</div>

							<p style="text-align:center">&nbsp;</p>
						</div>
					</div>
				</div>
			</div>

				<script src="js/bootstrap.js"></script>
				<script src="js/jquery.dcjqaccordion.2.7.js"></script>
				<script src="js/scripts.js"></script>
				<script src="js/jquery.slimscroll.js"></script>
				<script src="js/jquery.nicescroll.js"></script>
				<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
				<script src="js/jquery.scrollTo.js"></script>
</body>

</html>