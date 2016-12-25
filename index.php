<?php
$mysqli = new mysqli('localhost', 'root','','FirstBD');
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli->set_charset("utf8");
$sqls = "SELECT * FROM items";
$sqlss = "INSERT INTO items(name) VALUE  ('banana');";

/*for($i = 0; $i < 100 ; $i++){
    $mysqli->query($sqlss);
}*/

$result = $mysqli->query($sqls);
$mysqli->commit();
//$actor = $result->fetch_assoc();
while ($actor = $result->fetch_assoc()) {
   $value[] = $actor;
}
$value[0]['id'] *= 5 ;
var_dump($value);

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
