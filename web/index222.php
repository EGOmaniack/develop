<?php
$file = file_get_contents("contacts.xml");
//$file ='<p><strong>111</strong></p>';
$xml = simplexml_load_string($file);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
var_dump($array);
?>
<!DOCTYPE>

<html>
<head>
    <script type="text/javascript" src = "js/jquery.min.js" ></script>
    <link rel="stylesheet" href="css/main.css">
    <title>PHP Test</title>
</head>
<body>

<header>
    <h2>Добро пожаловать в PHP</h2>
</header>
        <input placeholder="введите имя" type="text" id="names">
        <input type="button" value="ClickMe" id="btn">
        <br>
        <div id="cont"></div>
        <br><br>


</body>
<script type="text/javascript" src="js/main.js?1"></script>
</html>
