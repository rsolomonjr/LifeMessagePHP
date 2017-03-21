

<!DOCTYPE html>
<html>
<head>
	<title>JS &amp; PHP Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<!-- <script type="text/javascript">
		var age = $('input[name="age"]').val(); 
		document.write(age); 
	
	</script> -->
	<div class="container text-center">
		<header>
			<div class="hb">
			<h1>Welcome!</h1>
			<h2>This program will take your age and output a special message!</h2>	
			</div>
			
		</header>
		<form action="getAge.php" method="post">
		<div class="age_form">
			AGE: <input type="text" name="age">
			<div class="submit"><input type="submit" name="submit" value="press me"></div>		
		</div>		
			
		</form>

	</div>


</body>
</html>

