<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$tabel = $_GET["tabel"];
$order_by = $_GET["order_by"];

if ($tabel === "RETETE_MEDICAMENTE") {
    $id_reteta = $_GET["id_reteta"];
    $id_medicament = $_GET["id_medicament"];

    header("Location: edit_retete_medicamente.php?id_reteta=$id_reteta&id_medicament=$id_medicament&order_by=$order_by");
    exit();
}

$id = $_GET["id_curent"];
$coloana = $_GET["nume_coloana"];

if ($tabel === "POSTURI") {
    header("Location: edit_posturi.php?id=$id&order_by=$order_by");
    exit();

} else if ($tabel === "ANGAJATI") {
    header("Location: edit_angajati.php?id=$id&order_by=$order_by");
    exit();

} else if ($tabel === "PACIENTI") {
    header("Location: edit_pacienti.php?id=$id&order_by=$order_by");
    exit();

} else if ($tabel === "DIAGNOSTICE") {
    header("Location: edit_diagnostice.php?id=$id&order_by=$order_by");
    exit();
    
} else if ($tabel === "MEDICI_PRESCRIPTORI") {
    header("Location: edit_medici_prescriptori.php?id=$id&order_by=$order_by");
    exit();
    
} else if ($tabel === "RETETE") {
    header("Location: edit_retete.php?id=$id&order_by=$order_by");
    exit();
    
} else if ($tabel === "MEDICAMENTE") {
    header("Location: edit_medicamente.php?id=$id&order_by=$order_by");
    exit();
    
} else if ($tabel === "PRODUCATORI") {
    header("Location: edit_producatori.php?id=$id&order_by=$order_by");
    exit();
    
}

?>
</body>
</html>