<!DOCTYPE html>
<html>
<head>
	<title>A meaningful title (wont appear in the page content but will appear when sharing the page by WhatsApp etc)</title>
	<link rel = "icon" href="icon.png" type = "image/x-icon">
	<meta name="description" content="A meaningful descriptoin (wont appear in the page but will appear when sharing the page).">
  	<meta name="keywords" content="Keyword1,Keyword2,Choose,Appropriate,Keywords">
  	<meta name="author" content="Your Name">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="myStyle.css"><!--define your colours in myStyle.css-->
	<link rel="stylesheet" type="text/css" href="w3.css"><!--w3.css is an external library-->
</head>
<body id='Page1'>
<div class="myPageWrapper">
	<div class="myPage">
		<a name="scroll-top"></a>
		<?php include_once("myTabs.html"); ?>
		<div class="myPageContent">
			<h1>Page 1</h1>
			<hr>
			<div class="myBlueBox">
				<center><img src="https://yourdomain/directory/img_pricing_code.png" alt="pricing models"></center>
			</div>
			<hr>
			<div class="myBlueBox">
				<h2>Title 2</h2>
				 <ul>
					<p>- Over 10 years of experience </p>
					<p>- Specialized in property and casualty treaty reinsurance</p>
					<p>- Actuarial evaluations of complex treaty structures</p>				
					<p>- Delivers exposure and experience ratings</p>
					<p>- Access to an additional expert in peak periods</p>
				</ul>
			</div>
			<hr>
			<div class="myBlueBox">
				<h2>Title 3</h2>
				Text, text, text
			</div>
		</div>
		<?php include_once("myFooter.html"); ?>
	</div>
</div>
</body>
</html>
