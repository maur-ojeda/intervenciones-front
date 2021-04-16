

<!-- Modal -->
<div class="modal fade" id="aproverModalInfo" tabindex="-1" role="dialog" aria-labelledby="aproverModalInfoTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aproverModalInfoTitle">Pedir más información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="mas_informacion" method="post" id="mas_informacion" workflow-form="1" data-display="modal">
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12 text-left ">
                            <label class="control-label required" for="mas_informacion_comentario">Observaciones</label>
                            <textarea id="mas_informacion_comentario" name="mas_informacion[comentario]" required="required" maxlength="255" placeholder="Ingrese texto" class="form-control"></textarea>
                        </div>
                    </div>
            
                </div>
            
            <input type="hidden" id="mas_informacion_tipo" name="mas_informacion[tipo]" value="Más Información Gestor Inmuebles"><input type="hidden" id="mas_informacion_trigger_action" name="mas_informacion[trigger_action]" value="Más información">
                                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
