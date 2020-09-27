<!DOCTYPE html>
<html>
<head>
	<title>DL</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<p style=" position: absolute; bottom: 0; right: 0; width: 80%; text-align: center;">
Books drive all of us at ColoredCow!</br> 
They give us a way to read and learn from what other people experienced in doing what we do.</br>
Be it understanding about what to eat, how to sleep and all the way to whom to hire, whom to train,</br> 
books have all of us covered.</br>
For all the love of books, we can never have enough of them.</br> 
Drop by our office some time and you will notice them all around.</br> 
We buy books by the dozens and love to talk about them too.</p>

<! -- Creating navigation bar with bootstrap -->
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

			<! -- Creating navigation bar items - Admin Login, User Login, Register -->
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>  
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>  
	<! -- br is used to leave some space after nav bar -->
	
	<span><marquee>Welcome to ColoredCow's Digital Library</marquee></span><br><br>
	
	<! -- Bootstrap divides our page into grid i.e rows & cols, which helps in positioning of items, eg:col-md-4 -->
	<! -- Creating a side bar whose styling is done in line-11 -->
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<img src="CC_img.png" alt="bg" width="455" height="500" style="vertical-align:bottom">
	    </div>	

	

		<! -- Creating User Login Form -->
		<div class="col-md-8" id="main_content">
			<center><h3>User Login Form</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>

			<?php
				session_start();
				//isset()-to check if the login button is clicked
				//post- method used in the form
				if(isset($_POST['login'])){
					//connect to database if user clicks login button
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					
					// write query- from users table, select information of the user
					// select all(*) data from users table, of the user who is entering the form
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					
					//create an array-$row, in which elements are fetched from database
					while($row = mysqli_fetch_assoc($query_run)){
		// check if the email id fetched from database is = to email id typed by the user
						//row : from database, post : from user-typed 
						if($row['email'] == $_POST['email']){
		// check if password fetched from database is = to password typed by the user
							if($row['password'] == $_POST['password']){
		//if email id & password both are correct login successfully
			//creating session variables to store name,email,id for future use
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
					        //redirect to users page
								header("Location:user_dashboard.php");
								
							}
							else{
								?>
								<span class="alert-danger">Wrong Password</span>
								<?php
							}
						}
					}
				}
			?>
	</div>
	</div>
</body>
</html>