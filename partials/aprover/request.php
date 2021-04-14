<div class="intervencion-request p-2">
    <div class="card">


        <div class="card-header bg-white">
            <h4 class="card-title">Solicitud de intervenciones</br>
                [0000]</h4>


            <small class="text-muted"><b>Solicitud de Intervenciones:</b> N° 1106</small>
            <br />
            <small class="text-muted"><b>Código Técnico:</b> SI-21</small>
            <br />
            <small class="text-muted"><b>Fecha Estimada de Entrega:</b> 29/03/2021 15:29:41</small>
            <br />
            <br />


            <?php include './partials/molecules/select.php' ?>


        </div>


        <div class="card-body">



            <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-contingencia" role="tab" aria-controls="pills-home" aria-selected="true">Contingencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-normal" role="tab" aria-controls="pills-profile" aria-selected="false">Normal</a>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-contingencia" role="tabpanel" aria-labelledby="pills-contingencia-tab">
                    <h1>Contingencia</h1>

                    <div id="accordion" class="mt-3">
                        <div class="card">
                            <!--tab-->
                            <div class="card-header" id="heading-1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Datos solicitante
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                            <!-- / tab-->
                            <!--tab-->

                            <div class="card-header" id="heading-2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        Datos solicitud
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>



                            <!-- / tab-->

                            <!--tab-->

                            <div class="card-header" id="heading-3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                        Evaluación gestor de inmuebles </button>
                                </h5>
                            </div>
                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                <div class="card-body">

                                    Solicitud aprobada
                                    Gestor:
                                    Fecha de aprobación:
                                    Comentarios:


                                </div>
                            </div>



                            <!-- / tab-->



                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="pills-normal" role="tabpanel" aria-labelledby="pills-normal-tab">
                    <h1>Normal</h1>
                </div>

            </div>
        </div>


        <hr>





        <div class="buttons text-center">

            <button type="button" class="btn btn-secondary">Aprobar</button>
            <button type="button" class="btn btn-secondary">Rechazar</button>
            <button type="button" class="btn btn-secondary">Más información</button>

        </div>



    </div>
    <!-- / cardbody-->

</div>

