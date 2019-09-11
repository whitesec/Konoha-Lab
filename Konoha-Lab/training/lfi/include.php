<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
		<img src="img/banner.jpg" width="300">
	<div id="menu">
		<ul>
			<li><a href="../../index.php">Pagina Inicial</a></li>
			<li><a href="include.php?file=team.php">Equipe da Vila</a></li>
			<li><a href="include.php?file=hokages.php">Hokages</a></li>
		</ul>
	</div>
	<title>Konoha Lab</title>
</head>
<body>
	<link rel="stylesheet" type="text/css"  href="css/style.css" />

</body>
</html>

<?php
include($_GET['file']);
?>