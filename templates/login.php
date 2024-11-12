<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

require_once '/srv/http/tohorweb/inc/functions.php';

// Handle form submission
$error = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Attempt to login with the provided credentials
    if (login($username, $password)) {
        // Redirect to the protected page on success
        header("Location: /templates/mod/dashboard.php");
        exit;
    } else {
        // Set error flag to true to display an error message
        $error = true;
    }
}
?>

<!DOCTYPE HTMLl>
<html{
    height:100%;
        background-image: url('https://lishore.somassbu.org/sitegraphics/backgr.gif');
		background-repeat: repeat;    background-attachment: fixed;
}>
<head>
	<title>TOH Ocean Rescue</title>
	<link rel = "icon" href="/static/images/TownOfHempsteadLogo.ico" type = "images/x-icon">
	<meta name="description" content="Ocean Rescue for Long Island, serving sine like, uh, a really long time..">
  	<meta name="keywords" content="Lifeguards">
  	<meta name="author" content="b7ttd">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="/static/styles.css">
	<link rel="stylesheet" type="text/css" href="w3.css"> 
</head>
<body id='Home'>
	<div class='myPageWrapper'>
		<div class="myPage">
			<h1 class="glitch" style: "text-align:center;" data-text="Login">Staff Login</h1>
    		<?php if ($error): ?>
        		<p style="color: red;">Invalid username or password. Please try again.</p>
    		<?php endif; ?>

    	<form action="login.php" method="post">
        		<label for="username">Username:</label>
        		<input type="text" id="username" name="username" required>

        		<label for="password">Password:</label>
        		<input type="password" id="password" name="password" required>

        		<button type="submit">Login</button>
    	</form>
</body>
</html>
