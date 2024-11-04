<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta Quatro</title>
<?php 
	session_start();

	$resp = 0;

	$_SESSION['resp3']= $_POST['pgt3'];

	if ($_SESSION['resp3'] == 1) {
		$resp ++;
	}
	?>

</head>
<body>
	<form action="pgt5.php" method="post">

		<label>Qual é o primeiro mês do ano?</label>
		<label>1- Junho</label>
		<label>2- Fevereiro </label>
		<label>3- Janeiro </label>

		<label>Insira o Numero:</label>
		<input type="text" name="pgt4" autocomplete="off">
	
	</form>
</body>
</html>