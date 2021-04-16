<!-- Modal -->
<div class="modal fade" id="aproverModalReject" tabindex="-1" role="dialog" aria-labelledby="aproverModalReject"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aproverModalReject">Rechazar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form name="gestor_inmuebles_rechazo" method="post" id="gestor_inmuebles_rechazo" workflow-form="1"
                data-display="modal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label required">Motivo <i
                                class="fas fa-xs fa-asterisk  text-danger"></i></label>

                        <div id="gestor_inmuebles_rechazo_motivo">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gestor_inmuebles_rechazo_motivo_0"
                                    name="gestor_inmuebles_rechazo[motivo]" required="required"
                                    value="Falta información más detallada o descriptiva del requerimiento"
                                    class="custom-control-input">
                                <label for="gestor_inmuebles_rechazo_motivo_0" class="custom-control-label">Falta
                                    información más
                                    detallada o descriptiva del requerimiento</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gestor_inmuebles_rechazo_motivo_1"
                                    name="gestor_inmuebles_rechazo[motivo]" required="required"
                                    value="Falta adjuntar fotografías al menos 03 del requerimiento solicitado"
                                    class="custom-control-input">
                                <label for="gestor_inmuebles_rechazo_motivo_1" class="custom-control-label">

                                    Falta adjuntar fotografías al menos 03 del requerimiento solicitado</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gestor_inmuebles_rechazo_motivo_2"
                                    name="gestor_inmuebles_rechazo[motivo]" required="required"
                                    value="Requerimiento no corresponde al rubro o familia ingresado"
                                    class="custom-control-input">
                                <label for="gestor_inmuebles_rechazo_motivo_2" class="custom-control-label">
                                    Requerimiento
                                    no corresponde al rubro o familia ingresado</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gestor_inmuebles_rechazo_motivo_3"
                                    name="gestor_inmuebles_rechazo[motivo]" required="required"
                                    value="Requerimiento no es contingencia de continuidad operativa o riesgo operacional"
                                    class="custom-control-input">
                                <label for="gestor_inmuebles_rechazo_motivo_3" class="custom-control-label">

                                    Requerimiento no es contingencia de continuidad operativa o riesgo
                                    operacional</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="gestor_inmuebles_rechazo_motivo_4"
                                    name="gestor_inmuebles_rechazo[motivo]" required="required" value="Otros"
                                    class="custom-control-input">
                                <label for="gestor_inmuebles_rechazo_motivo_4" class="custom-control-label">

                                    Otros</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 text-left ">
                                <label class="control-label required"
                                    for="gestor_inmuebles_rechazo_argumentacion">Argumentación <i
                                        class="fas fa-xs fa-asterisk  text-danger"></i></label>
                                <textarea id="gestor_inmuebles_rechazo_argumentacion"
                                    name="gestor_inmuebles_rechazo[argumentacion]" required="required" maxlength="255"
                                    rows="3" placeholder="Argumentación" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-customized">Enviar</button>
        </div>
    </div>
</div>
</div>