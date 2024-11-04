<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Problema 01</title>
<?php 	
      
session_start();

?>
</head>
<body>
		<form action="form2.php" method="post">

			<label>Nome:</label>
			<input type="text" name="nome" autocomplete="off" maxlength="30"><br><br>

			<label>Idade:</label>
			<input type="text" name="idade" autocomplete="off" maxlength="30"><br><br>
			
			<label>Peso:</label>
			<input type="text" name="peso" autocomplete="off" maxlength="30"><br><br>
			
			<label>Altura:</label>
			<input type="text" name="altura" autocomplete="off" maxlength="30"><br><br>

			<input type="submit" name="enviar" value="Enviar">

			
			
		</form>
	

</body>
</html>