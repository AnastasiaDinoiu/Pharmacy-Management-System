<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_unitate_medicala = $_GET["new_unitate_medicala"];
$new_nume = $_GET["new_nume"];
$new_prenume = $_GET["new_prenume"];
$new_email = $_GET["new_email"];
$new_telefon = $_GET["new_telefon"];


$query = "UPDATE MEDICI_PRESCRIPTORI SET unitate_medicala = \"" . $new_unitate_medicala . "\", nume = \"" . $new_nume . "\", prenume = \"" . $new_prenume . "\", 
email = \"" . $new_email . "\", telefon = \"" . $new_telefon . "\" WHERE parafa_medic_prescriptor = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=MEDICI_PRESCRIPTORI&order_by=$order_by&submit=");
exit();

?>
</body>
</html>