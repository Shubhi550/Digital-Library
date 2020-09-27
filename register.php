<?php
// Before starting the php code, go to Xampp Control Panel >> MySql-Admin 
// >> New >> Name your database-lms >> Name your tables >>
// Database is like Excel and tables are like excel-sheets

// Creating connection for database, to save the required enteries in our database.
// function- mysqli_connect() takes 3 params- server, username and password. 
	$connection = mysqli_connect("localhost","root","");
// Selecting database.
// mysqli_select_db() takes 2 params- Connection variable and Database name(created in phpMyAdmin).
// mysqli - mysql improved
	$db = mysqli_select_db($connection,"lms");
// Writing Queries, so that when user submits a form , the enteries are inserted in the table- user.
// insert- id(null , because it is auto incremented), name,email,password,address(strings), mobile(integer).
	$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
// Using javascript to show alert messgage
	alert("Registration successfully...You may login now.")
// Redirect to login page.
	window.location.href = "index.php";
</script>