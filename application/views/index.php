
<!-- HEADER -->
<?php include ("header.php");?>
<!-- /HEADER -->
<!-- STAGE -->
<div class="prime-area">
    <div class="container-fluid">

        <div class="col-12 d-flex justify-content-center row"> 
            <div class="col-12 d-flex justify-content-center">
                <div class="alert alert-primary col-6" role="alert">
                    <center><h1><b>Directorio Oficial JuventudEsGto</b></h1></center>
                </div>
            </div>

            <center>Comunicate con nosotros al tel&eacute;fono <br> <h4><b>(477) 710 3400</b></h4><br></center>

            <div class="col-12 d-flex justify-content-center mt-10">
                <div class="col-12">
                    <table class="table table-striped" id="table">
                        <thead style="background-color: #1A237E !important; color: white">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Extensi&oacute;n</th>
                                <!-- <th scope="col">Puesto</th> -->
                                <th scope="col">Area</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($juventudes); $i++) { ?>
                            <tr>
                                <td><?= strtoupper($juventudes[$i]['Apellido']) ?> <?= strtoupper($juventudes[$i]['Nombre']) ?></td>
                                <td><?= $juventudes[$i]['Correo'] ?></td>
                                <td><?= $juventudes[$i]['Extension'] ?></td>
                                <td><?= $juventudes[$i]['Area'] ?></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>


    </div>




</div>
</div>
<!-- /STAGE -->
<!-- FOOTER -->
<?php include ("footer.php");?>
<?php include ("footer_js.php");?>
<!-- /FOOTER -->


