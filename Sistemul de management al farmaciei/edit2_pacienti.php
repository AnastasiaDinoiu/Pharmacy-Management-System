<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_nume = $_GET["new_nume"];
$new_prenume = $_GET["new_prenume"];
$new_cnp = $_GET["new_cnp"];

$query = "UPDATE PACIENTI SET nume = \"" . $new_nume . "\", prenume = \"" . $new_prenume . "\", cnp = " . $new_cnp . " WHERE id_pacient = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=PACIENTI&order_by=$order_by&submit=");
exit();

?>
</body>
</html>