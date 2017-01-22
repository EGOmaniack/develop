<?php
//phpinfo();
// Соединение, выбор базы данных
$dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=Rgrur4frg56eq16")
    or die('Could not connect: ' . pg_last_error());


$result = pg_query("select * from  directory.time_period_measure") or die('Ошибка запроса: ' . pg_last_error()); 

echo "<table>\n";
while ($line = pg_fetch_assoc($result)) {
    echo "\t<tr>\n";
    foreach ($line as $col_key => $col_value ) {
        echo "\t\t<td>$col_key: $col_value;</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
pg_free_result($result);
pg_close($dbconn);
?>