<?php
session_start();

$username = $_POST['username'];
$password =$_POST['password'];

$mysql_db_hostname = "localhost";
$mysql_db_user = "pramodh";
$mysql_db_password = "";
$mysql_db_database = "login";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database");

$query = "SELECT * FROM registered_users WHERE name='$username' AND password='$password'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row >=1 ) {
 
			echo '
			<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
			<div data-role="page" id="home">
	<div data-role="header" >
	<h1>This is header </h1>
	</div>
   <div data-native-menu ="nav">
   	<tr>
	<td><a href="#home" data-ajax="false">home</a></td>
	<td><a href="#about" data-ajax="false">about us</a></td>
		<td><a href="logout.php" data-ajax="false">Logout</a> </td>
	</tr>
	</div>
	<div data-role="content">
	<ul id="vegetable-seeds">
  <li data-spacing="10cm" data-sowing-time="March to June">Carrots</li>
  <li data-spacing="30cm" data-sowing-time="February to March">Celery</li>
  <li data-spacing="3cm" data-sowing-time="March to September">Radishes</li>
	</ul>
	<p>Widget reference Test drive every component in the library, and easily build pages by copying and pasting the markup configuration you need.</p>
	<p>this is home one more paragraph tags</p>
  	</div>
	<div data-role="footer"  >
	<h4>this is home Footer copy right</h4>
	</div>
	</div>
		<div data-role="page" id="about">
	<div data-role="header"  >
	<h1>This is header</h1>
	</div>
		<div data-role="nav">
	<tr>
	<td><a href="#home" data-ajax="false">home</a></td>
	<td><a href="#about" data-ajax="false">about us</a></td>
	<td><a href="logout.php" data-ajax="false">Logout</a> </td>
	</tr>
	</div>
	<div data-role="content">
	<p>jQuery Mobile is a touch-optimized HTML5 UI framework designed to make sites and apps that are accessible on all popular smartphone, tablet and desktop devices.</p>
	<p>this is about  one more paragraph tags</p>
 
	</div>
	<div data-role="footer"  >
	<h4>this is about Footer copy right</h4>
	</div>
	</div>';
			$_SESSION['user_name']=$row['name'];			
			
		}
		else{
			echo 'false';
		}
?>
