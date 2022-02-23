<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$tabel = $_GET["tabel"];
$order_by = $_GET["order_by"];

if($tabel === "RETETE_MEDICAMENTE") {
    $id_reteta = $_GET["id_reteta"];
    $id_medicament = $_GET["id_medicament"];

    $query = "DELETE FROM $tabel WHERE id_reteta = $id_reteta AND id_medicament = $id_medicament";
    $result = $conn->query($query);

    header("Location: select_table.php?nume_tabel=$tabel&order_by=$order_by&submit=");
    exit();

} else {
    $id = $_GET["id_curent"];
    $coloana = $_GET["nume_coloana"];

    // echo "DELETE FROM " . $tabel . " WHERE " . $coloana . "=" . $id;

    $query = "DELETE FROM " . $tabel . " WHERE " . $coloana . "=" . $id;
    $result = $conn->query($query);

    header("Location: select_table.php?nume_tabel=$tabel&order_by=$order_by&submit=");
    exit();
}

?>
</body>
</html>