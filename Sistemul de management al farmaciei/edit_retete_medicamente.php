<html>

<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#eee5e5;">
<?php

include "db_connect.php";

// id-urile curente
$id_reteta = $_GET["id_reteta"];
$id_medicament = $_GET["id_medicament"];
$order_by = $_GET["order_by"];

$query = "SELECT * FROM RETETE_MEDICAMENTE WHERE id_reteta = $id_reteta AND id_medicament = $id_medicament";
$result = $conn->query($query);

// numarul de medicamente
foreach($result as $row) {
  $numar_medicamente = $row['numar_medicamente'];
}

?>

<!-- Formularul -->
<form class="form-horizontal" action="edit2_retete_medicamente.php">

<fieldset>

<!-- Form Name -->
<legend>Editeaza numarul de medicamente</legend>

<!-- Id-uri -->
<input type="hidden" id="id_reteta" name="id_reteta" value=<?php echo $id_reteta ?>>
<input type="hidden" id="id_medicament" name="id_medicament" value=<?php echo $id_medicament ?>>

<input type="hidden" id="order_by" name="order_by" value=<?php echo $order_by ?>>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_numar_medicamente">Numar de medicamente</label>  
  <div class="col-md-4">
  <input id="new_numar_medicamente" name="new_numar_medicamente" type="text" placeholder="<?php echo $numar_medicamente ?>" class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
     <button id="submit" name="submit" class="btn btn-primary">Update</button>
  </div>
</div>
</fieldset>
</form>

</body>
</html>