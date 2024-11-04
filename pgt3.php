<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta Tres</title>
<?php 
	session_start();

	$resp = 0;

	$_SESSION['resp2']= $_POST['pgt2'];

	if ($_SESSION['resp2'] == 2) {
		$resp ++;
	}
	?>

</head>
<body>
	<form action="pgt4.php" method="post">

		<label>Qual animal é conhecido como o "rei da selva"?</label>
		<label>1- Leão</label>
		<label>2- Tigre </label>
		<label>3- Cachorro </label>

		<label>Insira o Numero:</label>
		<input type="text" name="pgt3" autocomplete="off">
	
	</form>
</body>
</html>