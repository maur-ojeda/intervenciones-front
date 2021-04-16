<div class="im-dashboard p-2">
    <div class="card">
        <div class="card-body">
            <div class="card-subtitle mb-2 text-muted">
                <?php include './partials/molecules/select.php' ?>





                <div class="">
                    <h3>Solicitudes por Revisar</h3>


                    <div id="sg-datatables-interventions_review_datatable_wrapper" class="dataTables_wrapper no-footer">
                        <div class="dataTables_length" id="sg-datatables-interventions_review_datatable_length"><label>Mostrar
                <select name="sg-datatables-interventions_review_datatable_length"
                  aria-controls="sg-datatables-interventions_review_datatable" class="">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> registros</label></div>
                        <div id="sg-datatables-interventions_review_datatable_filter" class="dataTables_filter"><label>Buscar:<input
                  type="search" class="" placeholder=""
                  aria-controls="sg-datatables-interventions_review_datatable"></label></div>
                        <table id="sg-datatables-interventions_review_datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="sg-datatables-interventions_review_datatable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="sg-datatables-interventions_review_datatable" rowspan="1" colspan="1" style="width: 27px;" aria-label="Nro: Activar para ordenar la columna de manera ascendente">Nro</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;" aria-label="Tipo de Solicitud">Tipo de Solicitud</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;" aria-label="Clasificación">
                                        Clasificación</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75px;" aria-label="Solicitante">
                                        Solicitante</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;" aria-label="Sucursal">
                                        Sucursal</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 48px;" aria-label="Centro de Costo">Centro de Costo</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65px;" aria-label="Fecha Estimada de Entrega">Fecha Estimada de Entrega</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;" aria-label="Fecha de Respuesta">Fecha de Respuesta</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 26px;" aria-label="SLA">SLA</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 55px;" aria-label="Estado">Estado
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62px;" aria-label="Acciones">
                                        Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td>1117</td>
                                    <td>Intervenciones</td>
                                    <td>Contingencia</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Rechazada por gestor de inmuebles</td>
                                    <td>





                                        <div class="btn-group btn-group-sm">


                                            <a href="/evaluador-ficha.php" title="Revisar" class="btn btn-warning btn-sm" target="_blank">
                                                <span class=""></span> Revisar

                                            </a>








                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="dataTables_info" id="sg-datatables-interventions_review_datatable_info" role="status" aria-live="polite">Mostrando registros del 1 al 1 de un total de 1 registros</div>
                        <div class="dataTables_paginate paging_first_last_numbers" id="sg-datatables-interventions_review_datatable_paginate"><a class="paginate_button first disabled" aria-controls="sg-datatables-interventions_review_datatable" data-dt-idx="0" tabindex="0" id="sg-datatables-interventions_review_datatable_first">Primero</a><span><a
                  class="paginate_button current" aria-controls="sg-datatables-interventions_review_datatable"
                  data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button last disabled" aria-controls="sg-datatables-interventions_review_datatable" data-dt-idx="2" tabindex="0" id="sg-datatables-interventions_review_datatable_last">Último</a></div>
                    </div>


                </div>

                <div class="">
                    <h3>Solicitudes en Proceso</h3>


                    <div id="sg-datatables-interventions_process_datatable_wrapper" class="dataTables_wrapper no-footer">
                        <div class="dataTables_length" id="sg-datatables-interventions_process_datatable_length"><label>Mostrar
                <select name="sg-datatables-interventions_process_datatable_length"
                  aria-controls="sg-datatables-interventions_process_datatable" class="">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> registros</label></div>
                        <div id="sg-datatables-interventions_process_datatable_filter" class="dataTables_filter">
                            <label>Buscar:<input type="search" class="" placeholder=""
                  aria-controls="sg-datatables-interventions_process_datatable"></label>
                        </div>
                        <table id="sg-datatables-interventions_process_datatable" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="sg-datatables-interventions_process_datatable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="sg-datatables-interventions_process_datatable" rowspan="1" colspan="1" style="width: 27px;" aria-label="Nro: Activar para ordenar la columna de manera ascendente">Nro</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;" aria-label="Tipo de Solicitud">Tipo de Solicitud</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;" aria-label="Clasificación">
                                        Clasificación</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75px;" aria-label="Solicitante">
                                        Solicitante</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;" aria-label="Sucursal">
                                        Sucursal</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 48px;" aria-label="Centro de Costo">Centro de Costo</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65px;" aria-label="Fecha Estimada de Entrega">Fecha Estimada de Entrega</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73px;" aria-label="Fecha de Respuesta">Fecha de Respuesta</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 26px;" aria-label="SLA">SLA</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 67px;" aria-label="Estado">Estado
                                    </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62px;" aria-label="Acciones">
                                        Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td>1122</td>
                                    <td>Intervenciones</td>
                                    <td>Contingencia</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Evaluación del aprobador de contingencia</td>
                                    <td>





                                        <div class="btn-group btn-group-sm">


                                            <a href=" /evaluador-ficha.php " title=" Revisar " class=" btn btn-warning btn-sm " target=" _blank ">
                                                <span class=" "></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role=" row " class=" even ">
                                    <td>1106</td>
                                    <td>Intervenciones</td>
                                    <td>Normal</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Rectificación de la cotización</td>
                                    <td>





                                        <div class=" btn-group btn-group-sm ">


                                            <a href=" /evaluador-ficha.php " title="Revisar " class="btn btn-warning btn-sm " target="_blank ">
                                                <span class=" "></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row " class="odd ">
                                    <td>1111</td>
                                    <td>Intervenciones</td>
                                    <td>Contingencia</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Evaluación del aprobador de contingencia</td>
                                    <td>





                                        <div class="btn-group btn-group-sm ">


                                            <a href=" /evaluador-ficha.php " title=" Revisar " class=" btn btn-warning btn-sm " target=" _blank ">
                                                <span class=" "></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role=" row " class=" even ">
                                    <td>1107</td>
                                    <td>Intervenciones</td>
                                    <td>Contingencia</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Cotización del proyecto</td>
                                    <td>





                                        <div class=" btn-group btn-group-sm ">


                                            <a href=" /evaluador-ficha.php" title="Revisar" class="btn btn-warning btn-sm" target="_blank">
                                                <span class=""></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>1105</td>
                                    <td>Intervenciones</td>
                                    <td>Contingencia</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Evaluación del gestor de inmuebles</td>
                                    <td>





                                        <div class="btn-group btn-group-sm">


                                            <a href=" /evaluador-ficha.php " title=" Revisar " class=" btn btn-warning btn-sm " target=" _blank ">
                                                <span class=" "></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class=" dataTables_info " id=" sg-datatables-interventions_process_datatable_info " role=" status " aria-live=" polite ">Mostrando registros del 1 al 5 de un total de 17 registros</div>
                        <div class=" dataTables_paginate paging_first_last_numbers " id=" sg-datatables-interventions_process_datatable_paginate "><a class=" paginate_button first disabled " aria-controls=" sg-datatables-interventions_process_datatable " data-dt-idx=" 0 " tabindex=" 0 " id=" sg-datatables-interventions_process_datatable_first ">Primero</a><span><a
                  class=" paginate_button current " aria-controls=" sg-datatables-interventions_process_datatable "
                  data-dt-idx=" 1 " tabindex=" 0 ">1</a><a class=" paginate_button "
                  aria-controls=" sg-datatables-interventions_process_datatable " data-dt-idx=" 2 "
                  tabindex=" 0 ">2</a><a class=" paginate_button "
                  aria-controls=" sg-datatables-interventions_process_datatable " data-dt-idx=" 3 "
                  tabindex=" 0 ">3</a><a class=" paginate_button "
                  aria-controls=" sg-datatables-interventions_process_datatable " data-dt-idx=" 4 "
                  tabindex=" 0 ">4</a></span><a class=" paginate_button last " aria-controls=" sg-datatables-interventions_process_datatable " data-dt-idx=" 5 " tabindex=" 0 " id=" sg-datatables-interventions_process_datatable_last ">Último</a></div>
                    </div>


                </div>





                <div class=" ">
                    <h3>Solicitudes Historicas</h3>


                    <div id=" sg-datatables-interventions_history_datatable_wrapper " class=" dataTables_wrapper no-footer ">
                        <div class=" dataTables_length " id=" sg-datatables-interventions_history_datatable_length "><label>Mostrar
                <select name=" sg-datatables-interventions_history_datatable_length "
                  aria-controls=" sg-datatables-interventions_history_datatable " class=" ">
                  <option value=" 5 ">5</option>
                  <option value=" 10 ">10</option>
                  <option value=" 25 ">25</option>
                  <option value=" 50 ">50</option>
                  <option value=" 100 ">100</option>
                </select> registros</label></div>
                        <div id=" sg-datatables-interventions_history_datatable_filter " class=" dataTables_filter ">
                            <label>Buscar:<input type=" search " class=" " placeholder=" "
                  aria-controls=" sg-datatables-interventions_history_datatable "></label>
                        </div>
                        <table id=" sg-datatables-interventions_history_datatable " class=" table table-striped table-bordered dataTable no-footer " cellspacing=" 0 " width=" 100% " role=" grid " aria-describedby=" sg-datatables-interventions_history_datatable_info " style=" width: 100%; ">
                            <thead>
                                <tr role=" row ">
                                    <th class=" sorting " tabindex=" 0 " aria-controls=" sg-datatables-interventions_history_datatable " rowspan=" 1 " colspan=" 1 " style=" width: 27px; " aria-label=" Nro: Activar para ordenar la columna de manera ascendente ">Nro</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 81px; " aria-label=" Tipo de Solicitud ">Tipo de Solicitud</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 88px; " aria-label=" Clasificación ">
                                        Clasificación</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 75px; " aria-label=" Solicitante ">
                                        Solicitante</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 60px; " aria-label=" Sucursal ">
                                        Sucursal</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 48px; " aria-label=" Centro de Costo ">Centro de Costo</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 65px; " aria-label=" Fecha Estimada de Entrega ">Fecha Estimada de Entrega</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 73px; " aria-label=" Fecha de Respuesta ">Fecha de Respuesta</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 26px; " aria-label=" SLA ">
                                        SLA</th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 47px; " aria-label=" Estado ">Estado
                                    </th>
                                    <th class=" sorting_disabled " rowspan=" 1 " colspan=" 1 " style=" width: 62px; " aria-label=" Acciones ">
                                        Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role=" row " class=" odd ">
                                    <td>1124</td>
                                    <td>Intervenciones</td>
                                    <td>Normal</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Solicitud Cerrada</td>
                                    <td>





                                        <div class=" btn-group btn-group-sm ">


                                            <a href="/evaluador-ficha.php" title="Revisar" class="btn btn-warning btn-sm" target="_blank">
                                                <span class=""></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>1123</td>
                                    <td>Intervenciones</td>
                                    <td>Normal</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Solicitud Cerrada</td>
                                    <td>





                                        <div class="btn-group btn-group-sm">


                                            <a href=" /evaluador-ficha.php " title=" Revisar " class=" btn btn-warning btn-sm " target=" _blank ">
                                                <span class=" "></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr role=" row " class=" odd ">
                                    <td>1103</td>
                                    <td>Intervenciones</td>
                                    <td>Normal</td>
                                    <td>Cristian Briones Ortega</td>
                                    <td>Putre</td>
                                    <td>1140</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Solicitud Cerrada</td>
                                    <td>





                                        <div class=" btn-group btn-group-sm ">


                                            <a href=" /evaluador-ficha.php " title="Revisar " class="btn btn-warning btn-sm " target="_blank ">
                                                <span class=" "></span> Revisar

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="dataTables_info " id="sg-datatables-interventions_history_datatable_info " role="status " aria-live="polite ">Mostrando registros del 1 al 3 de un total de 3 registros</div>
                        <div class="dataTables_paginate paging_first_last_numbers " id="sg-datatables-interventions_history_datatable_paginate "><a class="paginate_button first disabled " aria-controls="sg-datatables-interventions_history_datatable " data-dt-idx="0 " tabindex="0 " id="sg-datatables-interventions_history_datatable_first ">Primero</a><span><a
                  class="paginate_button current " aria-controls="sg-datatables-interventions_history_datatable "
                  data-dt-idx="1 " tabindex="0 ">1</a></span><a class="paginate_button last disabled " aria-controls="sg-datatables-interventions_history_datatable " data-dt-idx="2 " tabindex="0 " id="sg-datatables-interventions_history_datatable_last ">Último</a></div>
                    </div>


                </div>





            </div>
        </div>
    </div>