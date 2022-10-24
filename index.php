<html>
<head>
	<center>
		<h1>Simple Pastebin<h1>
		<h3>made by kipkat</h3>
		<h3><?php
			echo "Hosting ".(iterator_count(new FilesystemIterator("./p/", FilesystemIterator::SKIP_DOTS))-1)." pastes. Every paste expires in 1 hour.";
		?></h3>
	</center>
	<style>	
		h1 {
			color: black;
		}
		h3 {
			color: green;
			margin-top: -20px;
		}
		body {
			background-color: #ffffff;
		}
		textarea {
			background-color: #ffffff;
			border: 2px solid black;
			color: #000;
		}
		input {
			padding: 3px;
			font-size: 40px;
			background-color: #ffffff;
			border: none;
			color: #000;
		}
		input:hover {
			border: 1px solid black;
		}
	</style>
</head>
<body>
<center>
	<p><textarea style="margin: 0px; height: 60%; width: 100%;" form="usrform" id="xcode" name="xcode" placeholder="code here"></textarea></p>
	<form id="usrform" action="./paste.php" method="post" enctype="multipart/form-data"><input type="submit" value='Upload'/></form>
</center>
</body>
</html>
