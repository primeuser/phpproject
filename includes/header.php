<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Site</title>
	<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href="index.php">Home</a> &nbsp;
<a href="about.php">About Us</a> &nbsp;
<a href="bloglist.php">Blogs</a> &nbsp;
<a href="contact.php">Contact Us</a> &nbsp;
<?php 
if (!isset($_SESSION['loginname'])){ ?>
<a href="loginform.php">Login</a> &nbsp;
<a href="registrationform.php">Register</a> &nbsp;
<?php 
} else { ?>
<a href="authentication/logout.php">Logout</a> &nbsp;

<?php
}

if (isset($_SESSION['loginname'])){
	echo "<h1>Hello ".$_SESSION['loginname']. "Welcome to our student management system. </h1>";
}

?>
</head>
 

<body>

<?php 

$cookie_name = "username";
$cookie_value = "Anand Sigdel";


setcookie($cookie_name, $cookie_value, time() + (86400 * 30));


// $_SESSION['user_id'] = "sigdelanand@kbc.edu.np";

?>


