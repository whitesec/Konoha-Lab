						<!DOCTYPE html>
<html>
<head>
		<link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
<body>
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

	textarea{
		border-color: orange;
	}

input[type="text"] {
	border-color: orange;
}

</style>
	<link rel="stylesheet" type="text/css"  href="css/style.css" />
	<link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
		<img src="img/banner.jpg" width="300">
	<div id="menu">
		<ul>
			<li><a href="../../index.php">Pagina Inicial</a></li>
			<li><a href="../../training/">Treinamentos</a></li>
		</ul>
	</div>
	<title>Konoha Lab</title>
</head>
<center>
								<h1 align="right">|RANK B</h1>
						<h2>Shell Upload</h2>
						<br><br>
						<div class="create_content" id="notice">
						<form method="post" enctype="multipart/form-data">	
							<input type="text" name="title" required size="50" placeholder="Título"/><br>
							<br><br>
							<textarea name="notice" placeholder="Texto" rows="10" cols="50" maxlength="800"></textarea><br>
							<input type="file" name="file"/><br>
							<br>
							<?php 
								if (isset($_POST["send"])):
									$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
									$notice = filter_input(INPUT_POST, "notice", FILTER_SANITIZE_SPECIAL_CHARS);
									$file = $_FILES["file"];
									$dir = "uploaded/";
									if(!empty($title) && !empty($notice)):
										if(is_file($file["tmp_name"]) && !empty($file)):
											$dst = $dir.$file["name"];
											$notice_dir = "uploaded/".$file["name"];
											$type_array = array("image/png", "image/png", "image/jpeg", "image/webp", "image/bmp");
											if(in_array($file["type"], $type_array)):
												if(move_uploaded_file($file["tmp_name"], $dst)):
													echo "<h3 class='success'>Upload feito com Sucesso ➔➔➔➔ /Konoha-Lab/training/shell-upload/uploaded/</h3>" . "<br />";
												
												endif;
											endif;
										endif;
									endif;
								endif;
							?>
							<input type="submit" name="send" class="myButton" value="UPLOAD">