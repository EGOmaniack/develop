<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=Rgrur4frg56eq16")
    or die('Could not connect: ' . pg_last_error());

$querystr = "select dictionary.names.name, personal.staff.sec_name, personal.staff.sername, dictionary.positions.position_name, personal.staff.berth_date";
$querystr .= " from dictionary.names, personal.staff, dictionary.positions";
$querystr .= " where names.id = staff.name and positions.id = staff.position";
$querystr .= " order by staff.id";
$result = pg_query($querystr) or die('Ошибка запроса: ' . pg_last_error()); 

echo "<table>\n";
while ($line = pg_fetch_assoc($result)) {
    echo "\t<tr>\n";
    foreach ($line as $col_key => $col_value ) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
pg_free_result($result);
pg_close($dbconn);
?>