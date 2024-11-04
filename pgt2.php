<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta Dois</title>
	
	<?php 
	session_start();
	$resp = 0;
	$_SESSION['resp1']= $_POST['pgt1']; 
	if ($_SESSION['resp1'] == 2) {
		$resp ++;
	}
	?>

</head>
<body>
	<form action="pgt3.php" method="post">

		<label>Quantos dias tem uma semana?</label>
		<label>1- 5 </label>
		<label>2- 7 </label>
		<label>3- 10 </label>

		<label>Insira o Numero:</label>
		<input type="text" name="pgt2" autocomplete="off">
	
	</form>

</body>
</html>