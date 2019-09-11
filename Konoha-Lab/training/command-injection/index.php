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

}
</style>
<h1 align="right">|RANK S</h1>
<center>
    <h2>COMMAND INJECTION</h2>
    <br><br><br>
        <form name=ping action=# method=post>
                <input type=text required name=ip autocomplete="off" size=30><br><br><br>
                <input type=submit name=Submit class="myButton" value=ENVIAR>
                <?php

if( isset( $_POST[ 'Submit' ]  ) ) {
    $target = $_REQUEST[ 'ip' ];

    if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
        $cmd = shell_exec( 'ping  ' . $target );
    }
    else {
        $cmd = shell_exec( 'ping  -c 4 ' . $target );
    }

    echo "<pre>{$cmd}</pre>";
}

?>

