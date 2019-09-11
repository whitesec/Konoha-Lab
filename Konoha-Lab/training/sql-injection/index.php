	<style>
		.myButton {
	-moz-box-shadow: 0px 1px 0px 0px #ffe100;
	-webkit-box-shadow: 0px 1px 0px 0px #ffe100;
	box-shadow: 0px 1px 0px 0px #ffe100;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff8400), color-stop(1, #ff9d00));
	background:-moz-linear-gradient(top, #ff8400 5%, #ff9d00 100%);
	background:-webkit-linear-gradient(top, #ff8400 5%, #ff9d00 100%);
	background:-o-linear-gradient(top, #ff8400 5%, #ff9d00 100%);
	background:-ms-linear-gradient(top, #ff8400 5%, #ff9d00 100%);
	background:linear-gradient(to bottom, #ff8400 5%, #ff9d00 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff8400', endColorstr='#ff9d00',GradientType=0);
	background-color:#ff8400;
	-moz-border-radius:9px;
	-webkit-border-radius:9px;
	border-radius:9px;
	border:1px solid #ffaa22;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 8px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff9d00), color-stop(1, #ff8400));
	background:-moz-linear-gradient(top, #ff9d00 5%, #ff8400 100%);
	background:-webkit-linear-gradient(top, #ff9d00 5%, #ff8400 100%);
	background:-o-linear-gradient(top, #ff9d00 5%, #ff8400 100%);
	background:-ms-linear-gradient(top, #ff9d00 5%, #ff8400 100%);
	background:linear-gradient(to bottom, #ff9d00 5%, #ff8400 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff9d00', endColorstr='#ff8400',GradientType=0);
	background-color:#ff9d00;
}
.myButton:active {
	position:relative;
	top:1px;
}

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
<body>
<?php
	include_once("../../config/config.inc.php");
	if(isset($e)):
?>
<?php
	elseif(isset($con)):
?>
			<ul>
				<br>
			<?php 
				$stmt = $con->prepare("SELECT * FROM `injection` ORDER BY `id` DESC LIMIT 10");
				$stmt->execute();
				if($stmt->rowCount() > 0):
					while($row = $stmt->fetchObject()):
			?>
					<h2><?php echo utf8_encode($row->title);?></h2><br>
						<li class="img"><img src="<?php echo $row->img;?>" width="280"></li>
						<li><h3><?php echo utf8_encode($row->texto);?></h3> <a class="myButton" href="injection?id=<?php echo $row->id;?>">Ver detalhes:</a></li><br><br><br><br>
			<?php 
					endwhile;
				else:
			?>	
			<h2>ERROR SQL INJECTION</h2>
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