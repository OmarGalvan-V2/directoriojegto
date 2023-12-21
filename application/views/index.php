<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuventudEsGto</title>
</head>

<?php include("header.php") ?>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/c575c56047.js" crossorigin="anonymous"></script>

<!-- Google Fonts (Material Icons) -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" href="<?= base_url('CSS/Botones.css') ?>">

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 ml-auto mr-auto"
                style="display: flex; justify-content: space-around; flex-direction: column; margin-top:-100px;">
                <!-- Button trigger modal -->
                <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
                <button type="button" class="btn button-22" style="font-family: monospace;" data-toggle="modal"
                    data-target="#AbrirModal">
                    <i class="fa fa-user-plus"></i> Registrar Empleado
                </button>
                <?php endif; ?>

            </div>
        </div>
        <!--Aqui Inicia La Tabla De Los Empleados-->
        <div class="row">
            <!--ml-auto: margen left: automatico-->
            <!--mr-auto: margen right: automatico-->
            <div class="col-sm-12 col-lg-6 ml-auto mr-auto">
                <div class="alert alert-primary" role="alert" style="padding:.75rem">
                    <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
                    <b>
                        <h1 style="font-size: 30px; text-align: center; font-family:monospace;">Administración
                            Directorio</h1>
                    </b>
                    <?php else: ?>
                        <center>
                            <h1><b>Directorio Oficial JuventudEsGto</b></h1>
                        </center>
                        <?php endif;?>
                </div>                
                <?php if ($_SESSION['datos'][0]['Rol'] == false) : ?>
                <center>Comunicate con nosotros al tel&eacute;fono <br> <h4><b>(477) 710 3400</b></h4><br></center>
                <?php endif;?>
            </div>
        </div>

        <div class="row">
            <div class="col-12  table-responsive mr-auto ml-auto">
                <table class="table table-striped" id="table" style="overflow-x: auto;">
                    <thead style="background-color: #1A237E !important; color: white">
                        <tr>
                            <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
                            <th scope="col">ID</th>
                            <?php endif; ?>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Extension</th>
                            <th scope="col">Área</th>
                            <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
                            <th scope="col">Editar</th>
                            <th scope="col">Status</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($juventudes); $i++) { ?>
                        <tr>
                            <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
                            <td><?= $juventudes[$i]['ID'] ?></td>
                            <?php endif; ?>
                            <td><?= strtoupper($juventudes[$i]['Apellido']) ?>
                                <?= strtoupper($juventudes[$i]['Materno']) ?>
                                <?= strtoupper($juventudes[$i]['Nombre']) ?></td>
                            <td><?= $juventudes[$i]['Correo'] ?></td>
                            <td><?= $juventudes[$i]['Extension'] ?></td>
                            <td><?= strtoupper($juventudes[$i]['Area']) ?></td>
                            <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
                            <td>
                                <a class="btn btn-primary"
                                    href="<?= base_url() . "Welcome/EditarUsuario?id=" . $juventudes[$i]['ID']  ?>"><i
                                        class="fa-regular fa-address-card"></i></a>
                            </td>
                            <td>
                                <div class="switch-container">
                                    <label class="switch">
                                        <?php if ($juventudes[$i]['Status']) { ?>
                                        <input type="checkbox" checked id="<?= $juventudes[$i]['ID'] ?> "
                                            onclick="actualizar(this)">
                                        <span class=" slider round"></span>
                                        <?php } else { ?>
                                        <input type="checkbox" id="<?= $juventudes[$i]['ID'] ?> "
                                            onclick="actualizar(this)">
                                        <span class=" slider round"></span>
                                        <?php } ?>
                                    </label>
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php if ($_SESSION['datos'][0]['Rol'] == '1') : ?>
    <?php include('Forms/ModalRegister.php') ?>
    <?php $this->load->view('Forms_js/UserStatus_js') ?>
    <?php endif; ?>
    <?php include('footer.php') ?>
    <?php include('footer_js.php') ?>

</body>

</html>