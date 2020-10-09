<?php

include 'includes/header.php';

?>

<h3>Registration Form</h3>
<br/>

<?php

// for printing the errors or success message returned from register.php using GET method

if (isset($_GET['error'])) {

	if ($_GET['error'] == 'fields_are_empty') {
		?>
		<h4 style="">Complete all the fields to register the user</h4>
		<?php
	}
}


if (isset($_GET['error'])) {

	if ($_GET['error'] == 'password_did_not_match') {
		?>
		<h4 style="">Your password and reentered password did not match</h4>
		<?php
	}
}

 ?>



<form method="post" action="authentication/register.php">
<label>Username:<input type="text" name="username"></label>
<br><br>
<label>Email<input type="email" name="email"></label>
<br> <br>
<label>Password<input type="password" name="password"></label>
<br><br>
<label>Reenter the Password<input type="password" name="repassword"></label>
<br> <br>
<button type="submit" name="register">Register User</button>

</form>

<?php

include 'includes/footer.php';

?>
