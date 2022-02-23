<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$id = $_GET["id_curent"];
$order_by = $_GET["order_by"];
$new_denumire_diagnostic = $_GET["new_denumire_diagnostic"];

$query = "UPDATE DIAGNOSTICE SET denumire_diagnostic = \"" . $new_denumire_diagnostic . "\" WHERE cod_diagnostic = " . $id . "";
$result = $conn->query($query);

header("Location: select_table.php?nume_tabel=DIAGNOSTICE&order_by=$order_by&submit=");
exit();

?>
</body>
</html>