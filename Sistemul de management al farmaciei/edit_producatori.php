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
$query = "SELECT * FROM PRODUCATORI WHERE id_producator = $id_curent";
$result = $conn->query($query);

// producator si tara producatorului curent
foreach($result as $row) {
  $producator = $row['producator'];
  $tara = $row['tara'];
}

?>

<!-- Formularul -->
<form class="form-horizontal" action="edit2_producatori.php">

<fieldset>

<!-- Form Name -->
<legend>Editeaza datele producatorului</legend>

<!-- Id-ul -->
<input type="hidden" id="id_curent" name="id_curent" value=<?php echo $id_curent ?>>

<input type="hidden" id="order_by" name="order_by" value=<?php echo $order_by ?>>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_producator">Producatorul</label>  
  <div class="col-md-4">
  <input id="new_producator" name="new_producator" type="text" placeholder="<?php echo $producator ?>" class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_tara">Tara</label>  
  <div class="col-md-4">
  <input id="new_tara" name="new_tara" type="text" placeholder="<?php echo $tara ?>" class="form-control input-md" required="">
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