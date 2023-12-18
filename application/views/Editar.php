<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>EditorJuventudEsGTO</title>

<form action="<?= base_url() ?>CRUDEP/Actualizar?id=<?= $empleado[0]['ID'] ?>" method="POST">


    <div class="form-group col-sm-6 mx-auto">
        <label for="formGroupExampleInput" class='centrar'>Nombre:</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" required="true" value="<?= $empleado[0]['Nombre'] ?>">
    </div>

    <br></br>

    <div class="form-group col-sm-6 mx-auto">
        <label for="formGroupExampleInput" class='centrar'>Apellido: </label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" required=true value="<?= $empleado[0]['Apellido'] ?>">
    </div>

    <br></br>

    <div class="form-group col-sm-6 mx-auto">
        <label for="formGroupExampleInput2">Correo:</label>
        <input type="text" class="form-control" id="Correo" name="Correo" required="true" value="<?= $empleado[0]['Correo'] ?>">
    </div>

    <br></br>

    <div class="form-group col-sm-6 mx-auto">
        <label for="formGroupExampleInput2">Extensión:</label>
        <input type="text" class="form-control" id="Extension" name="Extension" required="true" value="<?= $empleado[0]['Extension'] ?>">
    </div>

    <br></br>

    <div class="form-group col-sm-6 mx-auto">
        <label for="exampleFormControlSelect1">Area:</label>
        <select class="form-control" id="Area" name='Area'>
            <?php for ($i = 0; $i < count($areas); $i++) { ?>
                <option value="<?= $areas[$i]['ID'] ?>"><?= $areas[$i]['Area'] ?></option>
            <?php } ?>
        </select>
    </div>

    <br></br>

    <div class='d-flex justify-content-center'>
        <button type="submit" class="btn btn-outline-primary">Actualizar Empleado</button>
    </div>

</form>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>