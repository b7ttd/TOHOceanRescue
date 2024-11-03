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
<body id='Page2'>
<div class="myPageWrapper">
	<div class="myPage">
		<a name="scroll-top"></a>
		<?php include_once("myTabs.html"); ?>
		<div class="myPageContent">
			<h1>Page 2</h1>
			<hr>
			<div class="myTextBox">
				<h2>Title 1</h2>
				ProMaSta is an acronym for Probability, Mathematics and Statistics. It reflects our interdisciplinary approach to problem solving.
			</div>
			<hr>
			<div class="myTextBox">
				<h2>Title 2</h2>
				 We offer our clients distinct support in actuarial analytics in order to increase profitability, improve their risk management tools and allowing them to make informed business decisions.  
			</div>
			<hr>
			<div class="myTextBox">
				<h2>Title 3</h2>
				Our clients are reinsurers, investment managers specializing in insurance investments and first insurers for optimizing their reinsurance.
			</div>
		</div>
		<?php include_once("myFooter.html"); ?>
	</div>
</div>
</body>
</html>
