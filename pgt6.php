<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta Quatro</title>
<?php 
	session_start();

	$resp = 0;

	$_SESSION['resp4']= $_POST['pgt4'];

	if ($_SESSION['resp4'] == 3) {
		$resp ++;
	}
	?>

</head>
<body>
	<form action="pgt6.php" method="post">

		<label>Qual é a forma geométrica com três lados?</label>
		<label>1- Quadrado</label>
		<label>2- Círculo </label>
		<label>3- Triângulo </label>

		<label>Insira o Numero:</label>
		<input type="text" name="pgt5" autocomplete="off">
	
	</form>
</body>
</html>