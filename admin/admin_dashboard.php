<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">

			<a class="navbar-brand">
      <div class="logo-image">
			<img src="logo-white.png" class="img-fluid" width="60" height="50">
			
      </div>
			</a>

				<a class="navbar-brand" href="index.php">Digital Library</a>
			</div>
			<font style="color: white"><span><strong>Welcome <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="add_book.php" class="dropdown-item">View/Add Books</a>
									</div>
			</li>
			
			
		</ul>
	</div>
</nav>

<span><marquee>Welcome to ColoredCow's Digital Library</marquee></span><br><br>
	
	
<style>
body {
  background-image: url('CC_img.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>		
		
		
</body>
</html>