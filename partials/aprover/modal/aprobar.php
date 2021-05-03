<!-- Modal -->
<div class="modal fade" id="aproverModalAprove" tabindex="-1" role="dialog" aria-labelledby="aproverModalAprove" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aproverModalAprove">Aprobar solicitud y confirmar tipo de intervención</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            

            <form name="gestor_inmuebles_aprobacion" method="post" id="gestor_inmuebles_aprobacion" workflow-form="1" data-display="modal">

                <div class="error-form-modal">
                    <h6>Se han encontrado los siguientes errores:</h6>
                </div>

                <div class="modal-body">
                    <div class="form-group">


                        <label class="control-label required">Clasificación
                            <i class="fas fa-asterisk fa-xs text-danger"></i>
                        </label>


                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="gestor_inmuebles_aprobacion_clasificacion_0" name="gestor_inmuebles_aprobacion[clasificacion]" required="required" value="contingencia" data-rule-required="true" aria-invalid="true" data-msg-required="Seleccione una opción de clasificación">
                                Contingencia
                            </label>
                        </div>

                        <div class="form-check">
                        
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" id="gestor_inmuebles_aprobacion_clasificacion_1" name="gestor_inmuebles_aprobacion[clasificacion]" required="required" value="normal" data-rule-required="true" aria-invalid="true">
                                Normal
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label id="control-label-clasificacion" class="control-label required" for="gestor_inmuebles_aprobacion_argumentacion">Justifique
                            el tipo de intervención seleccionado <i class="fas fa-xs fa-asterisk  text-danger"></i></label>
                        <textarea id="gestor_inmuebles_aprobacion_argumentacion" name="gestor_inmuebles_aprobacion[argumentacion]" required="required" maxlength="255" rows="3" placeholder="Argumentación" class="form-control" data-msg-required="Ingrese texto en argumentación"></textarea>
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