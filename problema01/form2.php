<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Formulario 02</title>

<?php 	
      
session_start();

$_SESSION['n']= $_POST['nome'];


$_SESSION['i'] = $_POST['idade'];


$_SESSION['p'] = $_POST['peso'];


$_SESSION['al'] = $_POST['altura'];

?>

</head>
<body>

<form action="sessao.php" method="post">

			<label>Nome:</label>
			<input type="text" name="nome02" autocomplete="off" maxlength="30"><br><br>

			<label>Idade:</label>
			<input type="text" name="idade02" autocomplete="off" maxlength="30"><br><br>
			
			<label>Peso:</label>
			<input type="text" name="peso02" autocomplete="off" maxlength="30"><br><br>
			
			<label>Altura:</label>
			<input type="text" name="altura02" autocomplete="off" maxlength="30"><br><br>

			<input type="submit" name="enviar" value="Enviar">

			

			
</form>


</body>
</html>