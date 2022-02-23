<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_id_pacient = $_GET["new_id_pacient"];
$new_cod_diagnostic = $_GET["new_cod_diagnostic"];
$new_tip_tratament = $_GET["new_tip_tratament"];
$new_parafa_medic_prescriptor = $_GET["new_parafa_medic_prescriptor"];
$date = $_GET["date"];
$new_id_angajat = $_GET["new_id_angajat"];


$query = "UPDATE RETETE SET id_pacient = " . $new_id_pacient . ", cod_diagnostic = " . $new_cod_diagnostic . ", tip_tratament = \"" . $new_tip_tratament . 
"\", parafa_medic_prescriptor = " . $new_parafa_medic_prescriptor . ", data_prescriere = \"" . $date . "\", id_angajat = " . $new_id_angajat . 
" WHERE id_reteta = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=RETETE&order_by=$order_by&submit=");
exit();

?>
</body>
</html>