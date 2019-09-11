<?php
$passwd_admin = base64_encode("konohalab_");
$host = "localhost";$user = "root";$pass = "";
$con = new PDO("mysql:host=".$host.";dbname=", $user, $pass);
$stmt = $con->prepare("CREATE DATABASE konoha_lab");
$stmt->execute();
$stmt = $con->prepare("USE konoha_lab");
$stmt->execute();
$stmt = $con->prepare("CREATE TABLE restricted_area (id int(11) NOT NULL,username varchar(155) NOT NULL,password varchar(200) NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8");
$stmt->execute();
$stmt = $con->prepare("INSERT INTO restricted_area (id, username, password) VALUES (1, 'administrator', '".$passwd_admin."')");
$stmt->execute();
$stmt = $con->prepare("ALTER TABLE restricted_area ADD PRIMARY KEY (id)");
$stmt->execute();
$stmt = $con->prepare("ALTER TABLE restricted_area MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2");
$stmt->execute();
$stmt = $con->prepare("CREATE TABLE injection (id int(11) NOT NULL,texto mediumtext NOT NULL,img varchar(155) NOT NULL,title varchar(155) NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8");
$stmt->execute();
$stmt = $con->prepare("INSERT INTO injection (id, texto, img, title) VALUES (1, 'SQL Injection, encontre a falha e explore ela, se torne um Genin melhor.\r\n<br><br>\r\n', 'img/injection.jpg', 'SQL Injection'), (2, 'Konoha Lab. \r\n<br><br>\r\n', '../img/banner.jpg', 'Konoha Lab')");
$stmt->execute();
$stmt = $con->prepare("ALTER TABLE injection ADD PRIMARY KEY (id)");
$stmt->execute();
$stmt = $con->prepare("ALTER TABLE injection MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13");
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
		<link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
		<img src="../img/banner.png" width="300">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Konoha_Lab</title>
</head>
<center>
	<br><br><br><br><br>
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
    text-shadow: black 0px 0px 15px; 
    font-family: 'Fjalla One';
}
		h3{
    color: black;
    font-family: 'Fjalla One';
}
		body{width: 100%;height: 100%;background-color: black;background-image: url('https://vignette.wikia.nocookie.net/naruto/images/f/f2/Konohagakure_no_Sato.png/revision/latest?cb=20140809020103&path-prefix=pt-br');background-size: 100%;}
	</style>
</head>
<body>
<section class="success">
	<h1>Banco de dados criado</h1>
	<h3>Konoha Lab</h3><br><br>
	<a class="myButton" href="../index.php">Pagina inicial</a>
</section>
</body>
</html>
