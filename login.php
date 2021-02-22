<?php
session_start();

if (isset($_POST['name'])) {
    if ($_POST['name'] == 'admin' && password_verify($_POST['password'], '$2y$10$jd0vXEvUbdOT4IWo.rJKfuMmYwayHmZS3YEWGMFpUlSUf5SviNZ5u')) {

        $_SESSION['prisijunges'] = 1;
        $_SESSION['user'] = $_POST['name'];

        setcookie('prisijunges', '1', time() + 60 * 60 * 24 * 365);
        setcookie('user', $_POST['name'], time() + 60 * 60 * 24 * 365);
        header("location: index.php");
    } else {
        setcookie('prosijunges', '0', time() + 60 * 60 * 24 * 365);
        echo "Wrong log in name or password, try again";
    }
}

if (isset($_GET['logout'])) {
    // $_SESSION['prisijunges']=0;
    session_destroy();
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu"
	rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet"
	href="path/to/font-awesome/css/font-awesome.min.css">
<title>Sign in</title>

</head>
<body>




	<div class="main">
		<p class="sign">Sign in</p>
		<form class="form1" action="login.php" method="post">
			<input class="un " type="text" placeholder="Username" name="name"
				value=""> <input class="pass" type="password" placeholder="Password"
				name="password" value=""> <input class="submit" type="submit"
				value="Log In">


		</form>
	</div>




</body>
</html>


