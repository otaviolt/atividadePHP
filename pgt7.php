<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pergunta Quatro</title>
<?php 
	session_start();

	$resp = 0;

	$_SESSION['resp5']= $_POST['pgt5'];

	if ($_SESSION['resp5'] == 3) {
		$resp ++;
	}
	?>

</head>
<body>
	<form action="pgt7.php" method="post">

		<label>Qual é o planeta mais próximo do Sol?</label>
		<label>1- Terra</label>
		<label>2- Marte </label>
		<label>3- Mercurio </label>

		<label>Insira o Numero:</label>
		<input type="text" name="pgt6" autocomplete="off">
	
	</form>
</body>
</html>