<?php
	if (isset($_POST['submit'])&&isset($_POST['file'])) {
		include(htmlspecialchars($_POST['file']));
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hard</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="file">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>