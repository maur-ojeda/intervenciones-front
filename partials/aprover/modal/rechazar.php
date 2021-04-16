
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
      <div class="modal-body">
        


      <form name="gestor_inmuebles_rechazo" method="post" id="gestor_inmuebles_rechazo" workflow-form="1" data-display="modal">
                    <div class="form-group d-none">
            <label class="control-label required">Fecha de rechazo</label>
    
        <div class="col-sm-6">
            <div id="gestor_inmuebles_rechazo_fecha" class="datepickerctrl form-inline" data-date-end-date="+10000d" disabled="disabled"><input type="text" id="gestor_inmuebles_rechazo_fecha_date" name="gestor_inmuebles_rechazo[fecha][date]" required="required" class="form-control" value="15/04/2021" autocomplete="off"><input type="text" id="gestor_inmuebles_rechazo_fecha_time" name="gestor_inmuebles_rechazo[fecha][time]" required="required" class="form-control" value="22:50"></div>
        </div>
    </div>
<div class="form-group">    <label class="control-label required">Motivo</label>
    <div id="gestor_inmuebles_rechazo_motivo"><div class="radio">                                                                                <label for="gestor_inmuebles_rechazo_motivo_0" class="required"><input type="radio" id="gestor_inmuebles_rechazo_motivo_0" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Falta información más detallada o descriptiva del requerimiento"> Falta información más detallada o descriptiva del requerimiento</label>
    </div><div class="radio">                                                                                <label for="gestor_inmuebles_rechazo_motivo_1" class="required"><input type="radio" id="gestor_inmuebles_rechazo_motivo_1" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Falta adjuntar fotografías al menos 03 del requerimiento solicitado"> Falta adjuntar fotografías al menos 03 del requerimiento solicitado</label>
    </div><div class="radio">                                                                                <label for="gestor_inmuebles_rechazo_motivo_2" class="required"><input type="radio" id="gestor_inmuebles_rechazo_motivo_2" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Requerimiento no corresponde al rubro o familia ingresado"> Requerimiento no corresponde al rubro o familia ingresado</label>
    </div><div class="radio">                                                                                <label for="gestor_inmuebles_rechazo_motivo_3" class="required"><input type="radio" id="gestor_inmuebles_rechazo_motivo_3" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Requerimiento no es contingencia de continuidad operativa o riesgo operacional"> Requerimiento no es contingencia de continuidad operativa o riesgo operacional</label>
    </div><div class="radio">                                                                                <label for="gestor_inmuebles_rechazo_motivo_4" class="required"><input type="radio" id="gestor_inmuebles_rechazo_motivo_4" name="gestor_inmuebles_rechazo[motivo]" required="required" value="Otros"> Otros</label>
    </div></div></div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12 text-left ">
                <label class="control-label required" for="gestor_inmuebles_rechazo_argumentacion">Argumentación</label>
                <textarea id="gestor_inmuebles_rechazo_argumentacion" name="gestor_inmuebles_rechazo[argumentacion]" required="required" maxlength="255" rows="3" placeholder="Argumentación" class="form-control"></textarea>
            </div>
        </div>

    </div>

</form>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
