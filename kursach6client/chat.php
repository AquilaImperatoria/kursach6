<?php
$conn_string = "host=localhost port=5432 dbname=postgres user=root password=123";
$db = pg_connect($conn_string);
$code = "TP6Uho5HDM";
$res = pg_query($db, "SELECT * FROM kursach6.messages WHERE chatcode = '$code' ");
while ($row = pg_fetch_row($res)) {
    $user_id = $row[3];
    echo $user_id . '<br/>';
}
?>

