<?php

include 'includes/header.php';



// for printing the errors or success message returned from register.php using GET method

if (isset($_GET['error'])) {

	if ($_GET['error'] == 'password_incorrect') {
		?>
		<h4 style="">Login Failed due to incorrect password</h4>
		<?php
	}
}


 ?>


<form method="post" action="authentication/login.php">
<label>Username or email:<input type="text" name="loginname"></label>
<br><br>
<label>Password<input type="password" name="password"></label>
<br><br>
<button type="submit" name="login">Login</button>

</form>

<?php

include 'includes/footer.php';

?>
