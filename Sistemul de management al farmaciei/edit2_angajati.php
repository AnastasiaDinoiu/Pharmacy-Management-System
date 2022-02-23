<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_nume = $_GET["new_nume"];
$new_prenume = $_GET["new_prenume"];
$new_cnp = $_GET["new_cnp"];
$new_id_post = $_GET["new_id_post"];
$new_email = $_GET["new_email"];
$new_telefon = $_GET["new_telefon"];


$query = "UPDATE ANGAJATI SET nume = \"" . $new_nume . "\", prenume = \"" . $new_prenume . "\", cnp = " . $new_cnp . 
", id_post = " . $new_id_post . ", email = \"" . $new_email . "\", telefon = \"" . $new_telefon . "\" WHERE id_angajat = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=ANGAJATI&order_by=$order_by&submit=");
exit();

?>
</body>
</html>