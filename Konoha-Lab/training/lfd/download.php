    <html>
    <head>
    <link rel="stylesheet" type="text/css"  href="../css/style.css" />
        <link rel="icon" type="imagem/png" href="https://i.pinimg.com/originals/b9/e5/b4/b9e5b4090dffe0f38880e62350c5b6fe.png" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
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

}
</style>
<h1 align="right">|RANK A</h1>
<center>
    <br><br>
<?php
 if (isset($_GET['file'])){
     $file = $_GET['file'];
     if (file_exists($file)) {
         header("Content-Lenght: ".filesize($file));
         header("Content-Disposition: attachment; filename=".basename($file));
         readfile($file);
         exit;
     } else {
              echo "<h2>ERRO: Arquivo não existe ou não foi encontrado</h2>" . "<br />";
     }
 } else {
     echo "<h2>ERRO: Nenhum arquivo selecionado para o Download</h2>" . "<br />";
 }
 ?>