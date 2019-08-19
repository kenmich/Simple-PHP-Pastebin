<html>
<head>
	<center>
		<h1>Simple Pastebin<h1>
		<h3>made by kipkat</h3>
		<h3><?php
			echo "Hosting ".(iterator_count(new FilesystemIterator("./paste/", FilesystemIterator::SKIP_DOTS))-1)." pastes. Every paste expires in 5 hours.";
		?></h3>
	</center>
	<style>	
		h1 {
			color: red;
		}
		h3 {
			color: blue;
			margin-top: -20px;
		}
		body {
			background-color: #000;
		}
		textarea {
			background-color: #111;
			border: 3px solid blue;
			color: #fff;
		}
		input {
			padding: 3px;
			font-size: 40px;
			background-color: #222;
			border: none;
			color: #fff;
		}
		input:hover {
			border: 2px solid red;
		}
	</style>
</head>
<body>
<center>
	<p><textarea style="margin: 0px; height: 60%; width: 100%;" form="usrform" id="xcode" name="xcode" placeholder="code here"></textarea></p>
	<form id="usrform" action="/paste.php" method="post" enctype="multipart/form-data"><input type="submit" value='Upload to server'/></form>
</center>
</body>
</html>
