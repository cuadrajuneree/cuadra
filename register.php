<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="register">
    <div id="register-screen">
    <div id="app-title">
	<h1>Registration Form</h1>
    </div>
    <div id="register-form">
    <form method="POST" action="actions/registration_action.php">
        Firstname:  <div><input type="text" class="reg-text" name="r_firstname" required></div><br />
        Lastname:   <div><input type="text" class="reg-text" name="r_lastname" required></div><br />
        Addess:     <div><input type="text" class="reg-text" name="r_address" required></div><br />
        E-mail:     <div><input type="text" class="reg-text" name="r_username" required></div><br />
        Password:   <div><input type="text" class="reg-text" name="r_password" required></div><br /><br />
                    <input type="submit" id="btn" name="registration" value="Register"><br />
	</form>
    </div>
    </div>
</div>
</body>
</html>