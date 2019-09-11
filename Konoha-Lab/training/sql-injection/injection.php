<?php 
error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css"  href="../css/style.css" />
	<link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
		<img src="../img/banner.jpg" width="300">
	<div id="menu">
		<ul>
			<li><a href="../../index.php">Pagina Inicial</a></li>
			<li><a href="../../training/">Treinamentos</a></li>
		</ul>
	</div>
	<title>Konoha Lab</title>
</head>
<body>
	<style>
				h1{
    color: orange;
    text-shadow: orange 0px 0px 15px; 
    font-family: 'Fjalla One';
}
		h3{
    color: black;
    font-family: 'Fjalla One';
}

</style>
<h1 align="right">|RANK D</h1>
<?php
	include_once("../../config/config.inc.php");
	if(isset($e)):
?>
<?php
	elseif(isset($con)):
?>
					<ul>
			<?php 
				if(isset($_GET['id'])):
					$id = $_GET['id']; 
					$stmt = $con->prepare("SELECT * FROM injection WHERE id = $id");
					$stmt->execute();
					while($row = $stmt->fetchObject()):
			?>
					<h2><?php echo utf8_encode($row->title);?></h2>
						<li class="img"><img src="<?php echo $row->img;?>" width="280"></li>
						<li><h3><?php echo $row->texto;?></h3></li>
			<?php 
					endwhile;
				else:
			?>	
			<h2>Error function SQL Injection Not Working.</h2>
			<?php endif;?>
			</ul>
			</div>
		</div>
	</section>
</section>
<?php
	else:
?>
<?php
	endif;
?>
</body>
</html>