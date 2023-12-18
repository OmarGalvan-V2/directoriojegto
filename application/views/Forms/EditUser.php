<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuventudEsGTO</title>
</head>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/c575c56047.js" crossorigin="anonymous"></script>

<!-- Google Fonts (Material Icons) -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url() . "CSS/InterfazUsuario.css" ?>">
<link rel="stylesheet" href="<?= base_url() . "CSS/InterfazFormularios.css" ?>">

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 ml-auto mr-auto card" id="card">
                <form id="FormP2" action="<?= base_url("CRUDEP/Actualizar") ?>" method="post">
                    <div class="form-row">
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-icon">
                                <i class="material-icons">&#xe87c;</i>
                                <input type="text" name="Nombre" class="form-control" id="Nombre" value=<?= $juventudes[0]['Nombre'] ?> placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-icon">
                                <i class="material-icons">&#xe7fb;</i>
                                <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Apellido Paterno" value="<?= $juventudes[0]['Apellido'] ?>">
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-icon">
                                <i class="material-icons">&#xe7fb;</i>
                                <input type="text" class="form-control" name="Materno" id="Materno" placeholder="Apellido Materno" value="<?= $juventudes[0]['Materno'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-icon">
                                <i class="material-icons">&#xe0be;</i>
                                <input type="text" class="form-control" name="Correo" id="Correo" placeholder="Correo" value="<?= $juventudes[0]['Correo'] ?>">
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-icon">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <input type="Number" class="form-control" name="Extension" id="Extension" placeholder="No.Extension" value="<?= $juventudes[0]['Extension'] ?>">
                            </div>
                        </div>
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <select class="form-control" id="Area" name='Area'>
                                    <!-- Iterar sobre las opciones -->
                                    <?php for ($i = 0; $i < count($AreaGTO['AreaGTO']); $i++) {
                                        $areaSeleccionada = $juventudes[0]['Area']; 
                                        // Verificar si esta es la opción seleccionada
                                        $selected = ($AreaGTO['AreaGTO'][$i]['ID'] == $areaSeleccionada) ? 'selected' : '';
                                    ?>
                                        <option value="<?= $AreaGTO['AreaGTO'][$i]['ID'] ?>" <?= $selected ?>>
                                            <?= $AreaGTO['AreaGTO'][$i]['Area'] ?>
                                        </option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>