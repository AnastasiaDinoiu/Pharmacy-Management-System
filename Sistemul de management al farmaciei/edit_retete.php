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
$query = "SELECT * FROM RETETE WHERE id_reteta = $id_curent";
$result = $conn->query($query);

// id_pacient, cod_diagnostic, tip_tratament, parafa_medic_prescriptor, data_prescriere, id_angajat
foreach($result as $row) {
  $id_pacient = $row['id_pacient'];
  $cod_diagnostic = $row['cod_diagnostic'];
  $tip_tratament = $row['tip_tratament'];
  $parafa_medic_prescriptor = $row['parafa_medic_prescriptor'];
  $data_prescriere = $row['data_prescriere'];
  $id_angajat = $row['id_angajat'];
}

?>

<!-- Formularul -->
<form class="form-horizontal" action="edit2_retete.php">

<fieldset>

<!-- Form Name -->
<legend>Editeaza datele retetei</legend>

<!-- Id-ul -->
<input type="hidden" id="id_curent" name="id_curent" value=<?php echo $id_curent ?>>

<input type="hidden" id="order_by" name="order_by" value=<?php echo $order_by ?>>

<!-- ID pacient-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_id_pacient">ID pacient</label>  
  <div class="col-md-4">
  <input id="new_id_pacient" name="new_id_pacient" type="text" placeholder=<?php echo $id_pacient ?> class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Cod diagnostic-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_cod_diagnostic">Cod diagnostic</label>  
  <div class="col-md-4">
  <input id="new_cod_diagnostic" name="new_cod_diagnostic" type="text" placeholder=<?php echo $cod_diagnostic ?> class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Tipul tratamentului-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_tip_tratament">Tipul tratamentului</label>
  <div class="col-md-4">
    <select id="new_tip_tratament" name="new_tip_tratament" class="form-control">
      <option value="Acut">Acut</option>
      <option value="Subacut">Subacut</option>
      <option value="Cronic">Cronic</option>
    </select>
  </div>
</div>

<!-- Parafa medicului prescriptor-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_parafa_medic_prescriptor">Parafa medicului prescriptor</label>  
  <div class="col-md-4">
  <input id="new_parafa_medic_prescriptor" name="new_parafa_medic_prescriptor" type="text" placeholder=<?php echo $parafa_medic_prescriptor ?> class="form-control input-md" required="">
  <span class="help-block">* Obligatoriu</span>  
  </div>
</div>

<!-- Data prescriere -->
<div class="form-group ">
      <label class="col-md-4 control-label" for="date">Data prescriere</label>
      <div class="col-md-4">
       <input class="form-control" id="date" name="date" placeholder="YYYY-MM-DD" type="text"/>
      </div>
     </div>

<!-- ID angajat-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_id_angajat">ID angajat</label>  
  <div class="col-md-4">
  <input id="new_id_angajat" name="new_id_angajat" type="text" placeholder=<?php echo $id_angajat ?> class="form-control input-md">
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




<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

</body>
</html>