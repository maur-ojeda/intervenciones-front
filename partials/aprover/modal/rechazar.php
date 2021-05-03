<!-- Modal -->
<div class="modal fade" id="aproverModalReject" tabindex="-1" role="dialog" aria-labelledby="aproverModalReject" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aproverModalReject">Rechazar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>





            <form name="gestor_inmuebles_rechazo" method="post" id="gestor_inmuebles_rechazo" workflow-form="1" data-display="modal">

            <div class="error-form-modal">
                    <h6>Se han encontrado los siguientes errores:</h6>
            </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label required">Motivo <i
                                class="fas fa-xs fa-asterisk  text-danger"></i></label>

                        <div id="gestor_inmuebles_rechazo_motivo">






                            <div class="form-check">
                            <label for="gestor_inmuebles_rechazo_motivo_0" class="form-check-label">
                                <input type="radio" id="gestor_inmuebles_rechazo_motivo_0" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Falta información más detallada o descriptiva del requerimiento" class="form-check-input" data-rule-required="true"  
                                aria-invalid="true" 
                                data-msg-required="Seleccione un motivo de rechazo">
                                Falta
                                    información más
                                    detallada o descriptiva del requerimiento</label>
                            </div>
                            <div class="form-check">
                            <label for="gestor_inmuebles_rechazo_motivo_1" class="form-check-label">    
                            <input type="radio" id="gestor_inmuebles_rechazo_motivo_1" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Falta adjuntar fotografías al menos 03 del requerimiento solicitado" class="form-check-input" data-rule-required="true"  
                                aria-invalid="true" 
                                data-msg-required="Seleccione un motivo de rechazo">
                                

                                    Falta adjuntar fotografías al menos 03 del requerimiento solicitado</label>
                            </div>
                            <div class="form-check">
                            <label for="gestor_inmuebles_rechazo_motivo_2" class="form-check-label">    
                            <input type="radio" id="gestor_inmuebles_rechazo_motivo_2" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Requerimiento no corresponde al rubro o familia ingresado" class="form-check-input" data-rule-required="true"  
                                aria-invalid="true" 
                                data-msg-required="Seleccione un motivo de rechazo">
                                
                                    Requerimiento
                                    no corresponde al rubro o familia ingresado</label>
                            </div>
                            <div class="form-check">
                            <label for="gestor_inmuebles_rechazo_motivo_3" class="form-check-label">    
                            <input type="radio" id="gestor_inmuebles_rechazo_motivo_3" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Requerimiento no es contingencia de continuidad operativa o riesgo operacional" class="form-check-input" data-rule-required="true"  
                                aria-invalid="true" 
                                data-msg-required="Seleccione un motivo de rechazo">
                                

                                    Requerimiento no es contingencia de continuidad operativa o riesgo
                                    operacional</label>
                            </div>
                            <div class="form-check">
                            <label for="gestor_inmuebles_rechazo_motivo_4" class="form-check-label">    
                            <input type="radio" id="gestor_inmuebles_rechazo_motivo_4" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Otros" class="form-check-input" data-rule-required="true"  
                                aria-invalid="true" 
                                data-msg-required="Seleccione un motivo de rechazo">
                                

                                    Otros</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 text-left ">
                                <label class="control-label required" for="gestor_inmuebles_rechazo_argumentacion">Argumentación <i
                                        class="fas fa-xs fa-asterisk  text-danger"></i></label>
                                <textarea id="gestor_inmuebles_rechazo_argumentacion" name="gestor_inmuebles_rechazo[argumentacion]" required="required" maxlength="255" rows="3" placeholder="Argumentación" class="form-control"  data-rule-required="true" 
 aria-invalid="true" 
 data-msg-required="Ingrese texto en argumentación"></textarea>
                            </div>
                        </div>
                    </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-customized">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>