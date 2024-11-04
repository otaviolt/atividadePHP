<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta Um</title>
	<?php 
	session_start();

	$_SESSION['nome']= $_POST['nome']; 
	?>
</head>
<body>
	<form action="pgt2.php" method="post">

		<label>Qual é a cor do céu em um dia claro?</label>
		<label>1- Verde</label>
		<label>2- Azul</label>
		<label>3- Roxo</label>

		<label>Insira o Numero:</label>
		<input type="text" name="pgt1" autocomplete="off">
	
	</form>

</body>
</html>