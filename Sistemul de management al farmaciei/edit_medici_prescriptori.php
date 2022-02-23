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
$query = "SELECT * FROM MEDICI_PRESCRIPTORI WHERE parafa_medic_prescriptor = $id_curent";
$result = $conn->query($query);

// unitate_medicala, nume, prenume,	email, telefon
foreach($result as $row) {
  $unitate_medicala = $row['unitate_medicala'];
  $nume = $row['nume'];
  $prenume = $row['prenume'];
  $email = $row['email'];
  $telefon = $row['telefon'];
}

?>

<!-- Formularul -->
<form class="form-horizontal" action="edit2_medici_prescriptori.php">

<fieldset>

<!-- Form Name -->
<legend>Editeaza datele medicului prescriptor</legend>

<!-- Id-ul -->
<input type="hidden" id="id_curent" name="id_curent" value=<?php echo $id_curent ?>>

<input type="hidden" id="order_by" name="order_by" value=<?php echo $order_by ?>>

<!-- Unitate medicala-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_unitate_medicala">Unitate medicala</label>  
  <div class="col-md-4">
  <input id="new_unitate_medicala" name="new_unitate_medicala" type="text" placeholder="<?php echo $unitate_medicala ?>" class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Nume-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_nume">Nume</label>  
  <div class="col-md-4">
  <input id="new_nume" name="new_nume" type="text" placeholder=<?php echo $nume ?> class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Prenume-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_prenume">Prenume</label>  
  <div class="col-md-4">
  <input id="new_prenume" name="new_prenume" type="text" placeholder=<?php echo $prenume ?> class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Adresa de email-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_email">Adresa de email</label>  
  <div class="col-md-4">
  <input id="new_email" name="new_email" type="text" placeholder=<?php echo $email ?> class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Numarul de telefon-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_telefon">Numarul de telefon</label>  
  <div class="col-md-4">
  <input id="new_telefon" name="new_telefon" type="text" placeholder=<?php echo $telefon ?> class="form-control input-md" required="">
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