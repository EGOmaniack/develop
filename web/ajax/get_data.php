<?php

$dbconn = pg_connect("host=localhost port=5432 dbname=thedata user=postgres password=Rgrur4frg56eq16")
    or die('Could not connect: ' . pg_last_error());


$result = pg_query("select * from  test.data1 where id >3 AND id <= 7") or die('Ошибка запроса: ' . pg_last_error()); 

$arrl=[];
$arr=[];
while ($line = pg_fetch_assoc($result)) {
    //echo "\t<tr>\n";
    foreach ($line as $col_key => $col_value ) {
        $arrl[$col_key] = $col_value;
        //echo "\t\t<td>$col_key: $col_value;</td>\n";
    }
    $arr[] = $arrl;
    //echo "\t</tr>\n";
}
//echo "</table>\n";

pg_free_result($result);
pg_close($dbconn);

//var_dump ($arr);
//echo ($result);
echo json_encode($arr);
?>