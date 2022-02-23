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

$nume_tabel = $_GET["nume_tabel"];

// ------------------------------------POSTURI--------------------------------------------
if($nume_tabel === "POSTURI"){
    ?>
    <form class="form-horizontal" action="select_table.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Posturi</legend>

    <input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
    <div class="col-md-4">
        <select id="order_by" name="order_by" class="form-control">
        <option value="id_post">ID-ul postului</option>
        <option value="denumire_post">Denumirea postului</option>
        <option value="salariu">Salariul</option>
        </select>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

    </fieldset>
    </form>
    <?php
    // ------------------------------------ANGAJATI--------------------------------------------
} else if($nume_tabel === "ANGAJATI") {
        ?>
        <form class="form-horizontal" action="select_table.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Angajati</legend>

    <input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
    <div class="col-md-4">
        <select id="order_by" name="order_by" class="form-control">
        <option value="id_angajat">ID-ul angajatului</option>
        <option value="nume">Nume</option>
        <option value="prenume">Prenume</option>
        <option value="cnp">CNP</option>
        <option value="id_post">ID-ul postului</option>
        <option value="email">email</option>
        <option value="telefon">Numar de telefon</option>
        </select>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

    </fieldset>
    </form>
        <?php
    // ------------------------------------PACIENTI--------------------------------------------
} else if($nume_tabel === "PACIENTI") {
        ?>
        <form class="form-horizontal" action="select_table.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Pacienti</legend>

    <input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
    <div class="col-md-4">
        <select id="order_by" name="order_by" class="form-control">
        <option value="id_pacient">ID-ul pacientului</option>
        <option value="nume">Nume</option>
        <option value="prenume">Prenume</option>
        <option value="cnp">CNP</option>
        </select>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

    </fieldset>
    </form>
    <?php
    // ------------------------------------DIAGNOSTICE--------------------------------------------
} else if($nume_tabel === "DIAGNOSTICE") {
        ?>
        <form class="form-horizontal" action="select_table.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Diagnostice</legend>

    <input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
    <div class="col-md-4">
        <select id="order_by" name="order_by" class="form-control">
        <option value="cod_diagnostic">Codul diagnosticului</option>
        <option value="denumire_diagnostic">Denumirea diagnosticului</option>
        </select>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>

    </fieldset>
    </form>
    <?php
    // ------------------------------------MEDICI_PRESCRIPTORI--------------------------------------------
} else if($nume_tabel === "MEDICI_PRESCRIPTORI") {
    ?>
    <form class="form-horizontal" action="select_table.php">
<fieldset>

<!-- Form Name -->
<legend>Medici prescriptori</legend>

<input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
  <div class="col-md-4">
    <select id="order_by" name="order_by" class="form-control">
      <option value="parafa_medic_prescriptor">Parafa medicului prescriptor</option>
      <option value="unitate_medicala">Unitatea medicala</option>
      <option value="nume">Nume</option>
      <option value="prenume">Prenume</option>
      <option value="email">email</option>
      <option value="telefon">Numar de telefon</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

    <?php
    // ------------------------------------RETETE--------------------------------------------
} else if($nume_tabel === "RETETE") {
    ?>
    <form class="form-horizontal" action="select_table.php">
<fieldset>

<!-- Form Name -->
<legend>Retete</legend>

<input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
  <div class="col-md-4">
    <select id="order_by" name="order_by" class="form-control">
      <option value="id_reteta">ID-ul retetei</option>
      <option value="id_pacient">ID-ul pacientului</option>
      <option value="cod_diagnostic">Codul diagnosticului</option>
      <option value="tip_tratament">Tipul tratamentului</option>
      <option value="parafa_medic_prescriptor">Parafa medicului prescriptor</option>
      <option value="data_prescriere">Data prescrierii</option>
      <option value="id_angajat">ID-ul angajatului</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

    <?php
    // ------------------------------------RETETE_MEDICAMENTE--------------------------------------------
} else if($nume_tabel === "RETETE_MEDICAMENTE") {
    ?>
    <form class="form-horizontal" action="select_table.php">
<fieldset>

<!-- Form Name -->
<legend>Retete-Medicamente</legend>

<input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
  <div class="col-md-4">
    <select id="order_by" name="order_by" class="form-control">
      <option value="id_reteta">ID-ul retetei</option>
      <option value="id_medicament">ID-ul medicamentului</option>
      <option value="numar_medicamente">Numarul de medicamente</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

    <?php
    // ------------------------------------MEDICAMENTE--------------------------------------------
} else if($nume_tabel === "MEDICAMENTE") {
    ?>
    <form class="form-horizontal" action="select_table.php">
<fieldset>

<!-- Form Name -->
<legend>Medicamente</legend>

<input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
  <div class="col-md-4">
    <select id="order_by" name="order_by" class="form-control">
      <option value="id_medicament">ID-ul medicamentului</option>
      <option value="dci">DCI</option>
      <option value="denumire_comerciala">Denumirea comerciala</option>
      <option value="forma_farmaceutica">Forma farmaceutica</option>
      <option value="concentratie">Concentratie</option>
      <option value="id_producator">ID-ul producatorului</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

    <?php
    // ------------------------------------PRODUCATORI--------------------------------------------
} else if($nume_tabel === "PRODUCATORI") {
    ?>
    <form class="form-horizontal" action="select_table.php">
<fieldset>

<!-- Form Name -->
<legend>Producatori</legend>

<input type="hidden" id="nume_tabel" name="nume_tabel" value=<?php echo $nume_tabel ?>>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="order_by">In functie de ce sa se faca ordonarea</label>
  <div class="col-md-4">
    <select id="order_by" name="order_by" class="form-control">
      <option value="id_producator">ID-ul producatorului</option>
      <option value="producator">Producatorul</option>
      <option value="tara">Tara</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

    <?php
}

?>
</body>
</html>