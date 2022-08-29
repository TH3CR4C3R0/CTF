<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CTF</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
		body{
			background-color: black;
			color: #00ff0d;
		}
		.container{
			margin-top: 20px;
			display: flex;
			align-content: center;
		}
		.curs{
			display: inline;
			text-align: left;
			font-size: 30px;
			word-wrap: unset;
		}
		.chall{
			border: solid white 1px;
			border-radius: 5px;
			padding: 5px;
			margin-left: 10px;
			flex-direction: column;
			width: 33%;
			text-align: center;
		}
		.chall:hover{
			transition: 1s;
			border: solid white 1px;
			border-radius: 5px;
			padding: 5px;
			margin-left: 10px;
			flex-direction: column;
			width: 33%;
			text-align: center;
			background-color: gray;
		}
		footer{
			position: fixed;
			bottom: 0;
		}

	</style>
</head>
<body>
	<div class="curs">
		<p>HTU@CST:~$ <span class="blank" id="blank">_</span></p>
	</div>
	<div class="container">
		<div class="chall" onclick="window.location.href ='easy.php'">
			Easy
		</div>
		<div class="chall" onclick="window.location.href ='medium.php'">
			Medium
		</div>
		<div class="chall" onclick="hard()">
			Hard
		</div>
	</div>
	<script type="text/javascript">
		function hard(){
			alert('Note: This challenge has 2 flags');
			window.location.href ='hard.php';						
		}


		var blank = document.getElementById('blank');

		function salman(){
			setInterval(()=>{blank.style.display = 'none';}, 1000);
			setInterval(()=>{blank.style.display = 'inline';}, 2000);
		}
		window.requestAnimationFrame(salman);
	</script>
	<footer>
		Hint: Some Challenges Could Be Solved in Multiple Ways
	</footer>
</body>
</html>