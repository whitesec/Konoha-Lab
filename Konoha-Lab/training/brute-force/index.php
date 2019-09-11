<!DOCTYPE html>
<html lang="pt-br">
	<head>
				<link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
		<img src="../img/banner.png" width="300">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
	<div id="menu">
		<ul>
					<li><a href="../../index.php">Pagina Inicial</a></li>
			        <li><a href="../../training/">Treinamentos</a></li>
		</ul>
	</div>
	<title>Konoha Lab</title>
	<link rel="stylesheet" type="text/css"  href="../css/style.css" />
		<meta charset="UTF-8" />
		<style type="text/css">
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
				h2{
    color: red;
    font-family: 'Fjalla One';
}
		h3{
    color: black;
    font-family: 'Fjalla One';
}
			div.global{
			width: 40%;
			height: auto;
			background-color: #fff;
			border: 1px solid #606060;
			padding: 50px;
			box-shadow: 0px 0px 10px #000;
			margin-top: 10%;
			margin-left: auto;
			margin-right: auto;
			}
			input[type='text'], input[type='password']{
			width: 300px;
			height: 25px;
			border-color: orange;
			border: solid 1px #606060;
			border-radius: 5px;
			}
			input[type='password']{
			margin-left: 10px;
			border-color: orange;
			}
			
						input[type='text']{
			margin-left: 10px;
			border-color: orange;
			}

			input[type='submit']{
			width: 150px;
			}
		</style>
	</head>
	<body>
		<center>
				<h1 align="right">|RANK C</h1>
		<div class="global">
			<form name="" method="post" action="">
				<h3>Usuário: <input type="text" autocomplete="off" required name="user" /></h3>
				<h3>Senha: <input type="password" autocomplete="off" required name="pass" /></h3>
				<input type="submit" class="myButton" name="submit" value="Logar!" />
									</div>
			</form>
			<?php
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				$user1 = 'administrator';
				$pass1 = 'konohalab_';
				
				if($submit){
					
					if($user == "" || $pass == ""){
					}
					else{
						if(($user == $user1 && $pass == $pass1)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.php");
						}
						else{
							echo "<h2 class='success'>Login falhou</h2>" . "<br />";
						}
					}
				}
			?>
	</body>
</html>		