<?php
?>
<!DOCTYPE html>
<html{
    height:100%;
        background-image: url('https://lishore.somassbu.org/sitegraphics/backgr.gif');
		background-repeat: repeat;    background-attachment: fixed;
}>
<head>
	<title>TOH Ocean Rescue</title>
	<link rel = "icon" href="static/images/TownOfHempsteadLogo.ico" type = "images/x-icon">
	<meta name="description" content="Ocean Rescue for Long Island, serving sine like, uh, a really long time..">
  	<meta name="keywords" content="Lifeguards">
  	<meta name="author" content="b7ttd">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="static/styles.css">
	<link rel="stylesheet" type="text/css" href="w3.css"> 
</head>
<body id='Home'>
<div class="myPageWrapper">
		<div class="myPage" style="min-height: 150vh;">
		<?php include 'myTabs.html'?>
		<!--Begin index content-->
		<div class="myPageContent">
			<div class="myRow">
				<div class="myCol myLeft myBlueBox">
					<h2>Town of Hempstead's Beaches</h2>
					Read on for the Town's greatest beaches.
					<p><a href="/templates/page1.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myRight myBlueBox">
					<h2>Employment</h2>
					Seeking work? We hire!
					<p><a href="/templates/page2.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myLeft myBlueBox">
					<h2>Documents</h2>
					Important documents stored here.
					<p><a href="/templates/pdfs.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myRight myBlueBox">
					<h2>Reports</h2>
					Have concerns? Direct them here.
					<p><a href="/templates/reports.php" class="myLinkButton">Read more...</a></p>
				</div>
			</div>
		<br>
		</div><!--endOfPageContent-->
		<hr>
		<?php include 'myFooter.html'?>
	</div> <!--endOfPage-->
</div><!--endOfPageWrapper-->
</body>
</html>
