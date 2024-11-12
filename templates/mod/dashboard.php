<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once '/srv/http/tohorweb/inc/functions.php';

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logout'])){destroyCookies();}
	
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    // If user is not authenticated, redirect to the login page
    header("Location: /templates/login.php");
    exit;
}
?>

<html{
    height:100%;
        background-image: url('https://lishore.somassbu.org/sitegraphics/backgr.gif');
		background-repeat: repeat;    background-attachment: fixed;
}>
<head>
	<title>TOH Ocean Rescue Mod Dashboard</title>
	<link rel = "icon" href="/static/images/TownOfHempsteadLogo.ico" type = "images/x-icon">
	<meta name="description" content="Ocean Rescue for Long Island, serving sine like, uh, a really long time..">
  	<meta name="keywords" content="Lifeguards">
  	<meta name="author" content="b7ttd">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="/static/styles.css">
	<link rel="stylesheet" type="text/css" href="w3.css"> 
</head>
<body id='Home'>
		<div class="myPageWrapper">
			<div class="myPage">
				<h1 style="text-align:center;">Mod Dashboard</h1>
					<div class="myCol myBlueBox" style:"border-radius:20px;">
					<h2>Reports and Complaints</h2>
					Access complaints we have received.
					<p><a href="/templates/page1.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myBlueBox">
					<h2>Upload Media</h2>
					Upload media to the site.
					<p><a href="/templates/page2.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myBlueBox">
					<h2>View Lifeguard Data</h2>
					View the database we keep for the guards.
					<p><a href="/templates/pdfs.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myBlueBox">
					<h2>Logout</h2>
					Safe logout button.
					<form action="dashboard.php" method="post">
						<input type="submit" name="logout" value="Logout"/>
					</form>
				</div>
				<div class="myCol myBlueBox">
					<h2>Make an announcement</h2>
					Make an anouncement to the website.
					<p><a href="/templates/reports.php" class="myLinkButton">Read more...</a></p>
		</div> <!--endOfPage-->
</div><!--endOfPageWrapper-->
</body>
</html>
