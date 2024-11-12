<!DOCTYPE html>
<html>
<head>
	<title>TOH Ocean Rescue Reports</title>
	<link rel = "icon" href="../static/images/TownOfHempsteadLogo.ico" type = "image/x-icon">
	<meta name="description" content="yes">
  	<meta name="keywords" content="Keyword1,Keyword2,Choose,Appropriate,Keywords">
  	<meta name="author" content="b7ttd">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="../static/styles.css">	
	<link rel="stylesheet" type="text/css" href="w3.css">
</head>
<body id='Page2'>
<div class="myPageWrapper">
	<div class="myPage" style="min-height:175vh;">
		<a name="scroll-top"></a>
		<?php include_once("myTabs.html"); ?>
		<h1 style="text-align: center;">Reports</h1>
		<div class="myTextBox">
			<h2>Reports Form</h2>
			<p>
			No nonsense, no outside links, as simple as this.
			The request is uploaded to our system and our guards
			are texted to respond as soon as possible.
			</p> 
			<form action='report.php' method="post"> 
			<table>
				<tbody>
					<tr>
					<th>Name</th>
					<td>
						<input type="text" name="name" size="25" maxlength="35" autocomplete="off" value=""></td>
					</tr>
					<tr>
					<th>Beach</th>
						<td>
						<select name="options" id="options" autocomplete="off">
						<option value="civic">Civic Beach</option>
						<option value="ptlookout">Point Lookout Beach</option>
						<option value="malibu">Malibu Shore Club Beach</o>
						<option value="nickerson">Nickerson Beach</o>
						<option value="mushrooms">Lido Beach (Mushrooms)/The Shore</o>
						<option value="mushrooms">Lido Beach Estates</o>

						<option value="lidowest">Lido West Beach</o>
						<option value="EAB">East Atlantic Beach</o>
						<option value="mushrooms">Lido Beach (Mushrooms)/The Shore</o>
						<option value="" selected="selected"></option>

						</td>
					</tr>
					<tr>
					<th>Options</th>
						<td>
						<select name="options" id="options" autocomplete="off">
						<option value="" selected="selected"></option>
						<option value="lgstaff">Concerning Lifeguard Staff</option>
						<option value="lgstaff">Wildlife</option>
						<option value="lgstaff">Thing</o>

						</td>
					</tr>
					<tr>
					<th>Subject</th>
						<td>
<input style="float:left;" type="text" name="subject" size="25" maxlength="100" autocomplete="off"><input accesskey="s" style="margin-left:2px;" type="submit" name="post" value="Submit">
					</tr>
					<tr>
					<th>Description</th>
						<td>
<textarea name="body" id="body" rows="5" cols="50"></textarea>
						</td>
					</tr>	
					<tr>
					<th>File Upload</th>
						<td>
		<tr id="upload">
			<th>
			</th>
				<td class="upload-area">
				<input type="file" name="file_multiple[]" id="upload_file" multiple/>
				<script type="text/javascript">
					if (typeof init_file_selector !== 'undefined') {
						var iOS_ifs = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
						if(!iOS_ifs) { init_file_selector({{ config.max_images }}); }
					}
				</script>
			</td>
		</tr>
	</table>	

				</div>
<?php include_once("myFooter.html"); ?>
</div>
</body>
</html>

