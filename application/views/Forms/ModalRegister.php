<!-- Modal -->
<div class="modal fade" id="AbrirModal" tabindex="-1" aria-labelledby="ventanaModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormP" action="<?= base_url("CRUDEP/Insertar") ?>" method="post">
                    <div class="form-row">
                        <!--Nombre Del Usuario-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons">&#xe87c;</i>
                                    </div>
                                </div>
                                <input type="text" name="Nombre" value="" class="form-control" id="Nombre"
                                    placeholder="Nombre" required>
                            </div>
                        </div>
                        <!--Apellido Paterno-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                   <div class="input-group-text">
                                     <i class="material-icons">&#xe7fb;</i>
                                   </div>
                                </div>
                                <input type="text" class="form-control" name="Apellido" id="Apellido"
                                    placeholder="Apellido Paterno" required>
                            </div>
                        </div>
                        <!--Apellido Materno-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons">&#xe7fb;</i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="Materno" id="Materno"
                                    placeholder="Apellido Materno" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <!--Correo Electronico del usuario-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons">&#xe0be;</i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="Correo" id="Correo" placeholder="Correo" required>
                            </div>
                        </div>
                        <!--No.Extension del Usuario-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="Number" class="form-control" name="Extension" id="Extension"
                                    placeholder="No.Extension" required>
                            </div>
                        </div>
                        <!--Status Del Usuario-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <select class="form-control" name="Status" id="Status">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <!--Area Departamental-->
                        <div class="col col-sm-12 col-lg-4 mb-3">
                            <div class="input-group input-icon-box">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <select class="form-control" id="Area" name='Area'>
                                    <?php for ($i = 0; $i < count($AreaGTO); $i++) { ?>
                                    <option value="<?= $AreaGTO[$i]['ID'] ?>">
                                        <?= $AreaGTO[$i]['Area'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn button-29 mr-auto registrar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-person-fill-check" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path
                            d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                    </svg>
                    Registrar Empleado
                </button>
                <button type="button" class="btn btn-outline-warning" id="cancelar" data-dismiss="modal">Limpiar Modal</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('Forms_js/UserRegister_js') ?>