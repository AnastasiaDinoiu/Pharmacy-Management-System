<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_producator = $_GET["new_producator"];
$new_tara = $_GET["new_tara"];

$query = "UPDATE PRODUCATORI SET producator = \"" . $new_producator . "\", tara = \"" . $new_tara . "\" WHERE id_producator = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=PRODUCATORI&order_by=$order_by&submit=");
exit();

?>
</body>
</html>