<?php
session_start();
$name = $_SESSION['name'];
$conn_string = "host=localhost port=5432 dbname=postgres user=root password=123";
$db = pg_connect($conn_string);
$code = $_SESSION['chatcode'];;
$res = pg_query($db, "SELECT * FROM kursach6.messages WHERE chatcode = '$code' ");
while ($row = pg_fetch_row($res)) {
    $user_id = $row[3];
    echo $user_id . '<br/>';
}
?>

