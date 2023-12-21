<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuventudEsGTO</title>
</head>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/c575c56047.js" crossorigin="anonymous"></script>

<!-- Google Fonts (Material Icons) -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url() . "CSS/Botones.css" ?>">

<body class="body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-6 card" id="card" style="margin-top:-75px; padding-bottom: 15px;">
                <form id="FormP" action="<?= base_url("CRUDEP/Actualizar") ?>" method="post">
                    <input type="hidden" name="ID" id="ID" value="<?= $juventudes[0]['ID'] ?>">
                    <h2 class="text-center mt-3">Actualizar Empleado</h2>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="Nombre">Nombre</label>
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons">&#xe87c;</i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="Nombre" id="Nombre"
                                    value="<?= $juventudes[0]['Nombre'] ?>" required>
                            </div>
                        </div>

                        <div class="form-group col">
                            <label for="Apellido">Paterno</label>
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons">&#xe87c;</i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="Apellido" id="Apellido"
                                    value="<?= $juventudes[0]['Apellido'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group col">
                            <label for="Materno">Materno</label>
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons">&#xe87c;</i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="Materno" id="Materno"
                                    value="<?= $juventudes[0]['Materno'] ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Correo">Correo Electronico</label>
                        <div class="input-group input-icon-box">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons">&#xe0be;</i>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="Correo" id="Correo"
                                value="<?= $juventudes[0]['Correo'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Area">Area Departamental</label>
                        <div class="input-group input-icon-box">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                            </div>
                            <select class="form-control" id="Area" name='Area'>
                                <?php for ($i = 0; $i < count($AreaGTO['AreaGTO']); $i++) {
                                $areaSeleccionada = $juventudes[0]['Area'];
                                $selected = ($AreaGTO['AreaGTO'][$i]['ID'] == $areaSeleccionada) ? 'selected' : '';
                            ?>
                                <option value="<?= $AreaGTO['AreaGTO'][$i]['ID'] ?>" <?= $selected ?>>
                                    <?= $AreaGTO['AreaGTO'][$i]['Area'] ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Extension">Número de Extensión</label>
                        <div class="input-group input-icon-box">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input type="number" class="form-control" name="Extension" id="Extension"
                                value="<?= $juventudes[0]['Extension'] ?>" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" id='Enviar'>
                            <i class="fas fa-user-check"></i> Actualizar Empleado
                        </button>
                        <a class="btn btn-danger" href=<?= base_url() . "Welcome/Administracion" ?> role="button">
                            <i class="fas fa-user-times"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('Forms_js/UserEdit_js')?>
</body>

</html>