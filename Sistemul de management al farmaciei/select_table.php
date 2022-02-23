<!DOCTYPE html>
<html>
<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

$tabel = $_GET["nume_tabel"];
$order_by = $_GET["order_by"];

$query = "SELECT * FROM " . $tabel . " ORDER BY " . $order_by . "";
$result = $conn->query($query);

if($tabel === "RETETE_MEDICAMENTE") {
    echo("<table>");
    $first_row = true;
    while ($row = $result->fetch_assoc()) {
        $ok = 1;
        if ($first_row) {
            $first_row = false;
            // Afisarea numelor coloanelor.
            echo '<tr>';
            foreach($row as $key => $field) {
                echo '<th>' . htmlspecialchars($key) . '</th>';
            }
            echo '</tr>';
        }
        // Afisarea datelor de pe o linie
        echo '<tr>';
        foreach($row as $key => $field) {
            if($ok === 2) {
                $id_medicament = $field;
                $ok = 0;
            }
            if($ok === 1) {
                $id_reteta = $field;
                $ok = $ok + 1;
            }
            echo '<td>' . htmlspecialchars($field) . '</td>';

        }

            ?>
            <td><a href="/edit/edit.php?tabel=<?php echo $tabel?>&id_reteta=<?php echo $id_reteta?>&id_medicament=<?php echo $id_medicament?>
            &order_by=<?php echo $order_by?>"><img src="/images/edit.png" alt="Edit" style="width:25px;height:25px;"></a></td>

            <td><a href="delete.php?tabel=<?php echo $tabel?>&id_reteta=<?php echo $id_reteta?>&id_medicament=<?php echo $id_medicament?>
            &order_by=<?php echo $order_by?>"><img src="/images/delete.png" alt="Delete" style="width:25px;height:25px;"></a></td>
            <?php

        echo '</tr>';
        
    }
    echo("</table>");
    
} else {
    $ok = 1;
    echo("<table>");
    $first_row = true;
    while ($row = $result->fetch_assoc()) {
        
        if ($first_row) {
            $first_row = false;
            // Afisarea numelor coloanelor.
            echo '<tr>';
            foreach($row as $key => $field) {
                if($ok) {
                    $nume_coloana = $key;
                    // echo "$nume_coloana";
                }
                $ok = 0;
                echo '<th>' . htmlspecialchars($key) . '</th>';
            }
            echo '</tr>';
        }
        // Afisarea datelor de pe o linie
        echo '<tr>';
        $ok = 1;
        foreach($row as $key => $field) {
            if($ok) {
                $id_curent = $field;
                // echo "$id_curent";
            }
            $ok = 0;
            echo '<td>' . htmlspecialchars($field) . '</td>';

        }

            ?>
            <td><a href="edit.php?tabel=<?php echo $tabel?>&nume_coloana=<?php echo $nume_coloana?>&id_curent=<?php echo $id_curent?>&order_by=<?php echo $order_by?>"><img src="/images/edit.png" alt="Edit" style="width:25px;height:25px;"></a></td>
            <td><a href="delete.php?tabel=<?php echo $tabel?>&nume_coloana=<?php echo $nume_coloana?>&id_curent=<?php echo $id_curent?>&order_by=<?php echo $order_by?>"><img src="/images/delete.png" alt="Delete" style="width:25px;height:25px;"></a></td>
            <?php

        echo '</tr>';
        
    }
    echo("</table>");
}


?>
</body>
</html>