<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id_reteta = $_GET["id_reteta"];
$id_medicament = $_GET["id_medicament"];
$order_by = $_GET["order_by"];

$new_numar_medicamente = $_GET["new_numar_medicamente"];

$query = "UPDATE RETETE_MEDICAMENTE SET numar_medicamente = " . $new_numar_medicamente . " WHERE id_reteta = $id_reteta AND id_medicament = $id_medicament ";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=RETETE_MEDICAMENTE&order_by=$order_by&submit=");
exit();

?>
</body>
</html>