<!DOCTYPE html>
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

// Verificarea conexiunii
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!-- Selectarea si afisarea continutului unui tabel -->
<form class="form-horizontal" action="order.php">
<fieldset>

<!-- Form Name -->
<legend style="color:#19647E;">Gestionarea bazei de date a unei farmacii</legend>
<p>
<img src="/images/logo.png" alt="logo" style="float:right;width:100px;height:100px; position:fixed"> 
</p> 


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nume_tabel">Selecteaza tabelul</label>
  <div class="col-md-4">
    <select id="nume_tabel" name="nume_tabel" class="form-control">
	    <option value="POSTURI">Posturi</option>
      <option value="ANGAJATI">Angajati</option>
      <option value="PACIENTI">Pacienti</option>
      <option value="DIAGNOSTICE">Diagnostice</option>
      <option value="MEDICI_PRESCRIPTORI">Medici prescriptori</option>
      <option value="RETETE">Retete</option>
      <option value="RETETE_MEDICAMENTE">Retete_Medicamente</option>
      <option value="MEDICAMENTE">Medicamente</option>
      <option value="PRODUCATORI">Producatori</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary" >Submit</button>
  </div>
</div>

</fieldset>
</form>

<?php

$conn->close();
?>

</body>
</html>
