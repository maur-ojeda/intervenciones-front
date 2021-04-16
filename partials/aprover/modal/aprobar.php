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




      <form>
        <div class="modal-body">



          <div class="form-group"> 
            <label class="control-label required">Clasificación <i class="fas fa-asterisk  text-danger"></i></label>
            <div id="gestor_inmuebles_aprobacion_clasificacion">
            <div class="custom-control custom-radio">
                 <input type="radio" id="gestor_inmuebles_aprobacion_clasificacion_0" name="gestor_inmuebles_aprobacion[clasificacion]" required="required" value="contingencia" class="custom-control-input"> 
                 <label for="gestor_inmuebles_aprobacion_clasificacion_0" class="custom-control-label">Contingencia</label>
                 </div>
                 <div class="custom-control custom-radio">
              <input type="radio" id="gestor_inmuebles_aprobacion_clasificacion_1" name="gestor_inmuebles_aprobacion[clasificacion]" required="required" value="normal" class="custom-control-input">
              <label for="gestor_inmuebles_aprobacion_clasificacion_1" class="custom-control-label"> Normal</label>
              </div>
            </div>
          </div>

<div class="form-group">
  <label class="control-label required" for="gestor_inmuebles_aprobacion_argumentacion">Justifique el tipo de intervención seleccionado <i class="fas fa-asterisk  text-danger"></i></label>
  <textarea id="gestor_inmuebles_aprobacion_argumentacion" name="gestor_inmuebles_aprobacion[argumentacion]" required="required" maxlength="255" rows="3" placeholder="Argumentación" class="form-control"></textarea>
</div>





                
                







        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-secondary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>