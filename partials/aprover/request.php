<div class="im-request p-2">
    <div class="card">

        <div class="card-header bg-white">
            <h4 class="card-title">Solicitud de intervenciones Nº [0000]</h4>
            <small class="text-muted mb-1"><b>Código Técnico:</b> SI-21</small>
            <small class="text-muted"><b>Fecha Estimada de Entrega:</b> 29/03/2021 15:29:41</small>

            <div class="alert alert-danger text-center mt-3" role="alert">Contingencia </div>

        </div>


        <div class="card-body">


            <div id="accordion" class="mt-3 im-accordion">
                <div class="card">
                    <!--tab-->
                    <?php include './partials/molecules/applicantInformation.php' ?>
                    <?php include './partials/molecules/requestData.php' ?>
                </div>
            </div>
            <hr>





            <div class="btn-group text-center">
                <button type="button" class="btn btn-secondary mr-1" data-toggle="modal" data-target="#aproverModalAprove">Aprobar</button>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#aproverModalReject">Rechazar</button>
                <button type="button" class="btn btn-secondary ml-1" data-toggle="modal" data-target="#aproverModalInfo">Más información</button>
            </div>



            <?php include './partials/aprover/modal/aprobar.php' ?>
            <?php include './partials/aprover/modal/rechazar.php' ?>
            <?php include './partials/aprover/modal/masinfo.php' ?>





        </div>
        <!-- / cardbody-->

    </div>