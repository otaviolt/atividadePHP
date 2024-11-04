<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessão do form1</title>
<?php 	
      
session_start();


$_SESSION['n2']= $_POST['nome02'];


$_SESSION['i2'] = $_POST['idade02'];


$_SESSION['p2'] = $_POST['peso02'];


$_SESSION['al2'] = $_POST['altura02'];

	// idade

	if($_SESSION['i'] > $_SESSION['i2']){

		$m_velho = $_SESSION['i'];
		$i_nome = $_SESSION['n'];		

	} else{

		$m_velho = $_SESSION['i2'];
		$i_nome = $_SESSION['n2'];
	}

// altura 

	if($_SESSION['al'] > $_SESSION['al2']){

		$al_maior = $_SESSION['al'];
		$al_nome = $_SESSION['n'];		

	} else{

		$al_maior = $_SESSION['al2'];
		$al_nome = $_SESSION['n2'];
	}


// PESO

	if($_SESSION['p'] > $_SESSION['p2']){

		$p_maior = $_SESSION['p'];
		$p_nome = $_SESSION['n'];		

	} else{

		$p_maior = $_SESSION['p2'];
		$p_nome = $_SESSION['n2'];
	}


	
	 ?>
</head>
<body>

	<h1>Comparações</h1>

	<b> Mais Velho:</b> <?php echo "$m_velho" ?>  <br/>
	<b> Nome:</b> <?php echo "$i_nome" ?>  <br/><br/>


	<b> Mais Alto:</b> <?php echo "$al_maior"?> <br/>
	<b> Nome:</b> <?php echo "$al_nome" ?>  <br/><br/>


	<b> Mais Pesado:</b> <?php echo "$p_maior"?> <br/>
	<b> Nome:</b> <?php echo "$p_nome" ?>  <br/>


	


	

</body>
</html>