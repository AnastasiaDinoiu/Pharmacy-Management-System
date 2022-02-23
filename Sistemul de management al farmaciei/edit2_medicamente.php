<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_dci = $_GET["new_dci"];
$new_denumire_comerciala = $_GET["new_denumire_comerciala"];
$new_forma_farmaceutica = $_GET["new_forma_farmaceutica"];
$new_concentratie = $_GET["new_concentratie"];
$new_id_producator = $_GET["new_id_producator"];

$query = "UPDATE MEDICAMENTE SET dci = \"" . $new_dci . "\", denumire_comerciala = \"" . $new_denumire_comerciala . "\", forma_farmaceutica = \"" . $new_forma_farmaceutica . 
"\", concentratie = \"" . $new_concentratie . "\", id_producator = " . $new_id_producator . " WHERE id_medicament = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=MEDICAMENTE&order_by=$order_by&submit=");
exit();

?>
</body>
</html>