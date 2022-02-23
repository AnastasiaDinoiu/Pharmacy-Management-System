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
$query = "SELECT * FROM MEDICAMENTE WHERE id_medicament = $id_curent";
$result = $conn->query($query);

// dci, denumire_comerciala, forma_farmaceutica, concentratie, id_producator
foreach($result as $row) {
  $dci = $row['dci'];
  $denumire_comerciala = $row['denumire_comerciala'];
  $forma_farmaceutica = $row['forma_farmaceutica'];
  $concentratie = $row['concentratie'];
  $id_producator = $row['id_producator'];
}

?>

<!-- Formularul -->
<form class="form-horizontal" action="edit2_medicamente.php">

<fieldset>

<!-- Form Name -->
<legend>Editeaza datele medicamentului</legend>

<!-- Id-ul -->
<input type="hidden" id="id_curent" name="id_curent" value=<?php echo $id_curent ?>>

<input type="hidden" id="order_by" name="order_by" value=<?php echo $order_by ?>>

<!-- DCI-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_dci">DCI</label>  
  <div class="col-md-4">
  <input id="new_dci" name="new_dci" type="text" placeholder="<?php echo $dci ?>" class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Denumire comerciala-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_denumire_comerciala">Denumire comerciala</label>  
  <div class="col-md-4">
  <input id="new_denumire_comerciala" name="new_denumire_comerciala" type="text" placeholder="<?php echo $denumire_comerciala ?>" class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Forma farmaceutica-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_forma_farmaceutica">Forma farmaceutica</label>  
  <div class="col-md-4">
  <input id="new_forma_farmaceutica" name="new_forma_farmaceutica" type="text" placeholder="<?php echo $forma_farmaceutica ?>" class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Concentratie-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_concentratie">Concentratie</label>  
  <div class="col-md-4">
  <input id="new_concentratie" name="new_concentratie" type="text" placeholder="<?php echo $concentratie ?>" class="form-control input-md">
  </div>
</div>

<!-- ID producator-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_id_producator">ID producator</label>  
  <div class="col-md-4">
  <input id="new_id_producator" name="new_id_producator" type="text" placeholder=<?php echo $id_producator ?> class="form-control input-md">
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