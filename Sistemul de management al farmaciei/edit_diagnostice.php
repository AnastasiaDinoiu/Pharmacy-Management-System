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

// id-ul curent
$id_curent = $_GET["id"];
$order_by = $_GET["order_by"];
$query = "SELECT * FROM DIAGNOSTICE WHERE cod_diagnostic = $id_curent";
$result = $conn->query($query);

// denumirea diagnosticului curent
foreach($result as $row) {
  $denumire_diagnostic = $row['denumire_diagnostic'];
}

?>

<!-- Formularul -->
<form class="form-horizontal" action="edit2_diagnostice.php">

<fieldset>

<!-- Form Name -->
<legend>Editeaza postul</legend>

<!-- Id-ul -->
<input type="hidden" id="id_curent" name="id_curent" value=<?php echo $id_curent ?>>

<input type="hidden" id="order_by" name="order_by" value=<?php echo $order_by ?>>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_denumire_diagnostic">Denumirea diagnosticului</label>  
  <div class="col-md-4">
  <input id="new_denumire_diagnostic" name="new_denumire_diagnostic" type="text" placeholder="<?php echo $denumire_diagnostic ?>" class="form-control input-md" required="">
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