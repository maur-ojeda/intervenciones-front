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
                    <?php include './partials/componenets/accordion/datos_del_solicitante.php' ?>
                    <?php include './partials/componenets/accordion/detalles_de_la_solicitud.php' ?>






                    <?php // include './partials/componenets/accordion/datos_de_la_solicitud.php' 
                    ?>
                    <?php // include './partials/componenets/accordion/solicitud_evaluada_por_gestor_de_inmuebles.php' 
                    ?>
                    <?php // include './partials/componenets/accordion/solicitud_evaluada_por_aprobador_de_contingencia.php' 
                    ?>
                    <?php // include './partials/componenets/accordion/detalles_de_la_solicitud.php' 
                    ?>
                    <?php // include './partials/componenets/accordion/proveedores_invitados.php' 
                    ?>
                    <?php // include './partials/componenets/accordion/historial_cotizaciones.php' 
                    ?>
                    <?php // include './partials/componenets/accordion/solicitud-de-mas-informacion.php'
                    ?>
                </div>
            </div>
            
            <hr>            
            
            
            <div id="im-providder-request">
                <?php include './partials/componenets/forms/detalles_de_la_solicitud.php' ?>
            </div>

            
            
            
            <hr>






            <div class="alert alert-warning" role="alert">
                <strong><small>"BancoEstado se reserva el derecho de adjudicar en forma parcial o total los items cotizados."</small></strong>
            </div>


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