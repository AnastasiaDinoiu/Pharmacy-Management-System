<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_denumire_post = $_GET["new_denumire_post"];
$new_salariu = $_GET["new_salariu"];

$query = "UPDATE POSTURI SET denumire_post = \"" . $new_denumire_post . "\", salariu = " . $new_salariu . " WHERE id_post = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=POSTURI&order_by=$order_by&submit=");
exit();

?>
</body>
</html>