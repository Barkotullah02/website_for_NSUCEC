

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NSUCEC SVG</title>
	<style type="text/css">
		.svg{
		/*	height: 100%;
			width: 100%;
			background-size: cover;
			background-repeat: no-repeat;
		}*/
	</style>
</head>
<body>

	<embed class="svg" src = "CEC.svg"/>

	<script type="text/javascript">
		let a = 0;
		let funct = setInterval(function () {
			a++;
			if (a === 4) {
				window.location = "index.php";
			}
		}, 550);
	</script>

</body>
</html>


