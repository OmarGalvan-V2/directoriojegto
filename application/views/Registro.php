<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<title>RegistroGTO</title>
<link rel="shortcut icon" href=<?= base_url() . "img/impulso.ico" ?>>

<form action="<?= base_url() ?>CRUDEP/Insertar" method="POST">

  <div class="form-group col-sm-6 mx-auto">
    <label for="formGroupExampleInput">Nombre:</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo set_value('Nombre'); ?>">
    <small id="Nombre" class="form-text text-muted"><?php echo form_error('Nombre'); ?></small>
  </div>

  </br>

  <div class="form-group col-sm-6 mx-auto">
    <label for="formGroupExampleInput">Apellido:</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" value="<?php echo set_value('Apellido'); ?>">
    <small id="Apellido" class="form-text text-muted"><?php echo form_error('Apellido'); ?></small>
  </div>


  </br>


  <div class="form-group col-sm-6 mx-auto">
    <label for="formGroupExampleInput2">Correo:</label>
    <input type="text" class="form-control" id="Correo" name="Correo" placeholder='Correo' value="<?php echo set_value('Correo'); ?>" size="50">
    <small id="Correo" class="form-text text-muted"><?php echo form_error('Correo'); ?></small>
  </div>


  <br></br>

  <div class="form-group col-sm-6 mx-auto">
    <label for="formGroupExampleInput2">Extensión:</label>
    <input type="number" class="form-control" id="Extension" name="Extension" placeholder='Número De Extensión' value="<?php echo set_value('Extension'); ?>">
    <small id="Extension" class="form-text text-muted"><?php echo form_error('Extension'); ?></small>
  </div>


  <br></br>


  <div class="form-group col-sm-6 mx-auto">
    <label for="exampleFormControlSelect1">Area:</label>
    <select class="form-control" id="Area" name='Area'>
    <?php  for($i = 0; $i < count($AreaGTO); $i++)  { ?>  
    <option value = "<?= $AreaGTO[$i]['ID']?>"><?= $AreaGTO[$i]['Area']?></option>
    <?php }?>
    </select>
  </div>


  <br></br>


  <div class='d-flex justify-content-center'>
    <button type="submit" class="btn btn-outline-primary">Registrar Empleado</button>
  </div>

  <br>

</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>