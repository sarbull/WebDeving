<!doctype html>
<html>
<head>
	<title>Generate png image</title>
	<style>
		body {
			margin:0;
			padding:0;
		}

		#image {
			margin-top: 30px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="image">
		<?php
			echo '<img src="img.php?width=200&height=200&text=demo-text">';
		?>
	</div>
</body>
</html>
