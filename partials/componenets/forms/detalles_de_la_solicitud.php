<div class="col-md-12 workflow-forms">

    <form name="cotizacion_proyecto" method="post" id="cotizacion_proyecto" workflow-form="1" data-display="inset" class="form-horizontal">
        <div style="background:#eee;padding:10px;margin-bottom:20px" class="embedded-form">

            <h3>Detalle cotización (items requeridos) </h3>


            <div class="form-group">
                <div class="row" id="cotizacion-partidas-items">
                    <div class="col-md-12">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                    <th>Costo directo <i class="glyphicon glyphicon-info-sign" style="cursor:pointer;display:inline-block;width:20px;height:20px" aria-hidden="true" data-toggle="tooltip" title="" data-original-title="Los gastos generales, utilidad e impuestos son calculados en el total según contrato."></i></th>
                                    <th>Monto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="lista-cotizacion-partidas-items" data-prototype="    <tr  class=&quot;cotizacion-partida-item removable-item&quot;>
                    <td style=&quot;width:30%&quot;><select id=&quot;cotizacion_proyecto_partidas_items___items___partida&quot; name=&quot;cotizacion_proyecto[partidas][items][__items__][partida]&quot; data-minimum-chars=&quot;0&quot;  style=&quot;&quot; class=&quot;cotizacion-partida-item-input select2-item form-control&quot;><option value=&quot;&quot;>Seleccione item</option><option value=&quot;2&quot;>cable coaxial</option><option value=&quot;3&quot;>Cable 1.5</option><option value=&quot;4&quot;>Cable 2.5</option><option value=&quot;6&quot;>Cambio de llaves de paso</option><option value=&quot;7&quot;>Cambio llaves lavamanos</option><option value=&quot;8&quot;>Reparación simple desagüe</option><option value=&quot;10&quot;>Cerámicas</option><option value=&quot;11&quot;>Estuco en muro interior</option></select></td>
            <td style=&quot;width:8%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_partidas_items___items___unidad_medida&quot; name=&quot;cotizacion_proyecto[partidas][items][__items__][unidad_medida]&quot; readonly=&quot;readonly&quot; class=&quot;form-control&quot; /></td>
            <td style=&quot;width:10%&quot;><input type=&quot;number&quot; id=&quot;cotizacion_proyecto_partidas_items___items___cantidad&quot; name=&quot;cotizacion_proyecto[partidas][items][__items__][cantidad]&quot; class=&quot;cotizacion-cantidad-input form-control&quot; /></td>
            <td style=&quot;width:20%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_partidas_items___items___precio&quot; name=&quot;cotizacion_proyecto[partidas][items][__items__][precio]&quot; data-format-number=&quot;1&quot; readonly=&quot;readonly&quot; class=&quot;text-right form-control&quot; /></td>
            <td style=&quot;width:20%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_partidas_items___items___monto&quot; name=&quot;cotizacion_proyecto[partidas][items][__items__][monto]&quot; data-format-number=&quot;1&quot; readonly=&quot;readonly&quot; class=&quot;text-right form-control&quot; /></td>
            <td class=&quot;clearfix&quot; style=&quot;width:22%&quot;>
                <a class=&quot;btn btn-sm btn-danger btn-clear-item pull-left&quot; onclick=&quot;reconfigureCotizacionPartidasListRemove()&quot;>
                    <i class=&quot;glyphicon glyphicon-minus&quot;></i>
                </a>
                <a class=&quot;btn btn-sm btn-primary btn-add-item pull-right&quot; data-target=&quot;#cotizacion_proyecto_partidas_items-btn-add&quot;>
                    <i class=&quot;glyphicon glyphicon-plus&quot;></i>
                </a>
            </td>
            </tr>
">
                                <tr class="cotizacion-partida-item removable-item">
                                    <td style="width:30%"><select id="cotizacion_proyecto_partidas_items_0_partida" name="cotizacion_proyecto[partidas][items][0][partida]" data-minimum-chars="0" readonly="readonly" style="pointer-events:none;" class="select-disabled form-control">
                                            <option value="" disabled="">Seleccione item</option>
                                            <option value="2" selected="selected">cable coaxial</option>
                                            <option value="3">Cable 1.5</option>
                                            <option value="4">Cable 2.5</option>
                                            <option value="6">Cambio de llaves de paso</option>
                                            <option value="7">Cambio llaves lavamanos</option>
                                            <option value="8">Reparación simple desagüe</option>
                                            <option value="10">Cerámicas</option>
                                            <option value="11">Estuco en muro interior</option>
                                        </select></td>
                                    <td style="width:8%"><input type="text" id="cotizacion_proyecto_partidas_items_0_unidad_medida" name="cotizacion_proyecto[partidas][items][0][unidad_medida]" readonly="readonly" class="form-control" value="m"></td>
                                    <td style="width:10%"><input type="number" id="cotizacion_proyecto_partidas_items_0_cantidad" name="cotizacion_proyecto[partidas][items][0][cantidad]" class="cotizacion-cantidad-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_partidas_items_0_precio" name="cotizacion_proyecto[partidas][items][0][precio]" data-format-number="1" readonly="readonly" class="text-right form-control" value="1000"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_partidas_items_0_monto" name="cotizacion_proyecto[partidas][items][0][monto]" data-format-number="1" readonly="readonly" class="text-right form-control"></td>
                                    <td class="clearfix" style="width:22%">
                                        <a class="btn btn-sm btn-primary btn-add-item pull-right" data-target="#cotizacion_proyecto_partidas_items-btn-add">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr class="cotizacion-partida-item removable-item">
                                    <td style="width:30%"><select id="cotizacion_proyecto_partidas_items_1_partida" name="cotizacion_proyecto[partidas][items][1][partida]" data-minimum-chars="0" readonly="readonly" style="pointer-events:none;" class="select-disabled form-control">
                                            <option value="" disabled="">Seleccione item</option>
                                            <option value="2">cable coaxial</option>
                                            <option value="3">Cable 1.5</option>
                                            <option value="4">Cable 2.5</option>
                                            <option value="6" selected="selected">Cambio de llaves de paso</option>
                                            <option value="7">Cambio llaves lavamanos</option>
                                            <option value="8">Reparación simple desagüe</option>
                                            <option value="10">Cerámicas</option>
                                            <option value="11">Estuco en muro interior</option>
                                        </select></td>
                                    <td style="width:8%"><input type="text" id="cotizacion_proyecto_partidas_items_1_unidad_medida" name="cotizacion_proyecto[partidas][items][1][unidad_medida]" readonly="readonly" class="form-control" value="un"></td>
                                    <td style="width:10%"><input type="number" id="cotizacion_proyecto_partidas_items_1_cantidad" name="cotizacion_proyecto[partidas][items][1][cantidad]" class="cotizacion-cantidad-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_partidas_items_1_precio" name="cotizacion_proyecto[partidas][items][1][precio]" data-format-number="1" readonly="readonly" class="text-right form-control" value="20000"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_partidas_items_1_monto" name="cotizacion_proyecto[partidas][items][1][monto]" data-format-number="1" readonly="readonly" class="text-right form-control"></td>
                                    <td class="clearfix" style="width:22%">
                                        <a class="btn btn-sm btn-primary btn-add-item pull-right" data-target="#cotizacion_proyecto_partidas_items-btn-add">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr class="cotizacion-partida-item removable-item">
                                    <td style="width:30%">
                                    
                                    <select id="cotizacion_proyecto_partidas_items_2_partida" class="js-example-basic-single" name="state">
                                        <option value="AL">Alabama</option>
                                        ...
                                        <option value="WY">Wyoming</option>
                                    </select>
                                                                        
                                    <select id="cotizacion_proyecto_partidas_items_2_partida" name="cotizacion_proyecto[partidas][items][2][partida]" data-minimum-chars="0" readonly="readonly" style="pointer-events:none;" class="select-disabled form-control">
                                            <option value="" disabled="">Seleccione item</option>
                                            <option value="2">cable coaxial</option>
                                            <option value="3" selected="selected">Cable 1.5</option>
                                            <option value="4">Cable 2.5</option>
                                            <option value="6">Cambio de llaves de paso</option>
                                            <option value="7">Cambio llaves lavamanos</option>
                                            <option value="8">Reparación simple desagüe</option>
                                            <option value="10">Cerámicas</option>
                                            <option value="11">Estuco en muro interior</option>
                                        </select></td>
                                    <td style="width:8%"><input type="text" id="cotizacion_proyecto_partidas_items_2_unidad_medida" name="cotizacion_proyecto[partidas][items][2][unidad_medida]" readonly="readonly" class="form-control" value="m"></td>
                                    <td style="width:10%"><input type="number" id="cotizacion_proyecto_partidas_items_2_cantidad" name="cotizacion_proyecto[partidas][items][2][cantidad]" class="cotizacion-cantidad-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_partidas_items_2_precio" name="cotizacion_proyecto[partidas][items][2][precio]" data-format-number="1" readonly="readonly" class="text-right form-control" value="800"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_partidas_items_2_monto" name="cotizacion_proyecto[partidas][items][2][monto]" data-format-number="1" readonly="readonly" class="text-right form-control"></td>
                                    <td class="clearfix" style="width:22%">
                                        <a class="btn btn-sm btn-primary btn-add-item pull-right" data-target="#cotizacion_proyecto_partidas_items-btn-add">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    </td>
                                </tr>

                                
                 
                            </tbody>
                        </table>
                        <div class="clearfix" style="margin-top:10px">
                            <button id="cotizacion_proyecto_partidas_items-btn-add" class="btn btn-add btn-warning pull-right hidden" data-target="lista-cotizacion-partidas-items" data-callback="reconfigureCotizacionPartidasListAdd" data-proto-name="__items__">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $(document).on('click', '.cotizacion-partida-item .btn-add-item', function() {
                        $('#cotizacion_proyecto_partidas_items-btn-add').trigger('click');
                    })
                })
            </script>

        </div>

        <div style="background:#eee;padding:10px;margin-bottom:20px" class="embedded-form">

            <h3>Detalle cotización (items adicionales) </h3>


            <div class="form-group">
                <div class="row" id="cotizacion-adicionales-items">
                    <div class="col-md-12">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                    <th>Costo directo <i class="glyphicon glyphicon-info-sign" style="cursor:pointer;display:inline-block;width:20px;height:20px" aria-hidden="true" data-toggle="tooltip" title="" data-original-title="Los gastos generales, utilidad e impuestos son calculados en el total según contrato."></i></th>
                                    <th>Monto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="lista-cotizacion-adicionales-items" data-prototype="    <tr  class=&quot;cotizacion-adicional-item removable-item&quot;>
                    <td style=&quot;width:30%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_adicionales_items___items___partida&quot; name=&quot;cotizacion_proyecto[adicionales][items][__items__][partida]&quot;  style=&quot;&quot; class=&quot;select-disabled form-control&quot; /></td>
            <td style=&quot;width:8%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_adicionales_items___items___unidad_medida&quot; name=&quot;cotizacion_proyecto[adicionales][items][__items__][unidad_medida]&quot;  style=&quot;&quot; class=&quot;form-control&quot; /></td>
            <td style=&quot;width:10%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_adicionales_items___items___cantidad&quot; name=&quot;cotizacion_proyecto[adicionales][items][__items__][cantidad]&quot; class=&quot;cotizacion-cantidad-adicional-input form-control&quot; /></td>
            <td style=&quot;width:20%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_adicionales_items___items___precio&quot; name=&quot;cotizacion_proyecto[adicionales][items][__items__][precio]&quot; data-format-number=&quot;1&quot; class=&quot;cotizacion-precio-adicional-input form-control&quot; /></td>
            <td style=&quot;width:20%&quot;><input type=&quot;text&quot; id=&quot;cotizacion_proyecto_adicionales_items___items___monto&quot; name=&quot;cotizacion_proyecto[adicionales][items][__items__][monto]&quot; data-format-number=&quot;1&quot; readonly=&quot;readonly&quot; class=&quot;text-right form-control&quot; /></td>
            <td class=&quot;clearfix&quot; style=&quot;width:22%&quot;>
                <a class=&quot;btn btn-sm btn-danger btn-clear-item pull-left&quot; onclick=&quot;reconfigureCotizacionAdicionalesListRemove()&quot;>
                    <i class=&quot;glyphicon glyphicon-minus&quot;></i>
                </a>
                <a class=&quot;btn btn-sm btn-primary btn-add-item pull-right&quot; data-target=&quot;#cotizacion_proyecto_adicionales_items-btn-add&quot;>
                    <i class=&quot;glyphicon glyphicon-plus&quot;></i>
                </a>
            </td>
        
    </tr>
">
                                <tr class="cotizacion-adicional-item removable-item">
                                    <td style="width:30%"><input type="text" id="cotizacion_proyecto_adicionales_items_0_partida" name="cotizacion_proyecto[adicionales][items][0][partida]" readonly="readonly" style="pointer-events:none;" class="select-disabled form-control" value="pintura exterior antigrafiti"></td>
                                    <td style="width:8%"><input type="text" id="cotizacion_proyecto_adicionales_items_0_unidad_medida" name="cotizacion_proyecto[adicionales][items][0][unidad_medida]" readonly="readonly" class="form-control" value="m2"></td>
                                    <td style="width:10%"><input type="text" id="cotizacion_proyecto_adicionales_items_0_cantidad" name="cotizacion_proyecto[adicionales][items][0][cantidad]" class="cotizacion-cantidad-adicional-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_adicionales_items_0_precio" name="cotizacion_proyecto[adicionales][items][0][precio]" data-format-number="1" class="cotizacion-precio-adicional-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_adicionales_items_0_monto" name="cotizacion_proyecto[adicionales][items][0][monto]" data-format-number="1" readonly="readonly" class="text-right form-control"></td>
                                    <td class="clearfix" style="width:22%">
                                        <a class="btn btn-sm btn-primary btn-add-item pull-right" data-target="#cotizacion_proyecto_adicionales_items-btn-add">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    </td>

                                </tr>

                                <tr class="cotizacion-adicional-item removable-item">
                                    <td style="width:30%"><input type="text" id="cotizacion_proyecto_adicionales_items_1_partida" name="cotizacion_proyecto[adicionales][items][1][partida]" readonly="readonly" style="pointer-events:none;" class="select-disabled form-control" value="ASDF ASFADSFA"></td>
                                    <td style="width:8%"><input type="text" id="cotizacion_proyecto_adicionales_items_1_unidad_medida" name="cotizacion_proyecto[adicionales][items][1][unidad_medida]" readonly="readonly" class="form-control" value="cm3"></td>
                                    <td style="width:10%"><input type="text" id="cotizacion_proyecto_adicionales_items_1_cantidad" name="cotizacion_proyecto[adicionales][items][1][cantidad]" class="cotizacion-cantidad-adicional-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_adicionales_items_1_precio" name="cotizacion_proyecto[adicionales][items][1][precio]" data-format-number="1" class="cotizacion-precio-adicional-input form-control"></td>
                                    <td style="width:20%"><input type="text" id="cotizacion_proyecto_adicionales_items_1_monto" name="cotizacion_proyecto[adicionales][items][1][monto]" data-format-number="1" readonly="readonly" class="text-right form-control"></td>
                                    <td class="clearfix" style="width:22%">
                                        <a class="btn btn-sm btn-primary btn-add-item pull-right" data-target="#cotizacion_proyecto_adicionales_items-btn-add">
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                        <div class="clearfix" style="margin-top:10px">
                            <button id="cotizacion_proyecto_adicionales_items-btn-add" class="btn btn-add btn-warning pull-right hidden" data-target="lista-cotizacion-adicionales-items" data-callback="reconfigureCotizacionAdicionalesListAdd" data-proto-name="__items__">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $(document).on('click', '.cotizacion-adicional-item .btn-add-item', function() {
                        $('#cotizacion_proyecto_adicionales_items-btn-add').trigger('click');
                    })
                })
            </script>

        </div>

        <div style="background:#eee;padding:10px;margin-bottom:20px" class="embedded-form">

            <h3>Montos de la Cotización <i class="glyphicon glyphicon-info-sign" style="cursor:pointer;display:inline-block;width:20px;height:20px" aria-hidden="true" data-toggle="tooltip" title="" data-original-title="En pesos chilenos."></i></h3>

            <div class="form-group">
                <div class="col-sm-8 text-right">
                    <label for="cotizacion_proyecto_montos_sub_total" class="control-label required">Costo Directo <i class="glyphicon glyphicon-info-sign" style="cursor:pointer;display:inline-block;width:20px;height:20px" aria-hidden="true" data-toggle="tooltip" title="" data-original-title="Los gastos generales, utilidad e impuestos son calculados en el total según contrato."></i></label>
                </div>

                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_sub_total" name="cotizacion_proyecto[montos][sub_total]" required="required" data-format-number="1" placeholder="monto" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control" value="0">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>

            <div class="form-group">
                <div class="col-sm-5 text-right">
                    <label for="cotizacion_proyecto_montos_utilidades" class="control-label required">Utilidades</label>
                </div>

                <div class="col-sm-2 ">
                    <input type="text" id="cotizacion_proyecto_montos_utilidades" name="cotizacion_proyecto[montos][utilidades]" required="required" placeholder="monto calculado" maxlength="15" minlength="1" readonly="readonly" class="text-center form-control" value="10">
                </div>
                <div class="col-sm-1 no-padding-lr"><strong>%</strong> ==&gt;</div>


                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_monto_utilidades" name="cotizacion_proyecto[montos][monto_utilidades]" required="required" data-format-number="1" placeholder="monto calculado" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>

            <div class="form-group">
                <div class="col-sm-5 text-right">
                    <label for="cotizacion_proyecto_montos_gastos_generales" class="control-label required">Gastos Generales</label>
                </div>

                <div class="col-sm-2 ">
                    <input type="text" id="cotizacion_proyecto_montos_gastos_generales" name="cotizacion_proyecto[montos][gastos_generales]" required="required" placeholder="monto calculado" maxlength="15" minlength="1" readonly="readonly" class="text-center form-control" value="14.5">
                </div>
                <div class="col-sm-1 no-padding-lr"><strong>%</strong> ==&gt;</div>


                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_monto_gastos_generales" name="cotizacion_proyecto[montos][monto_gastos_generales]" required="required" data-format-number="1" placeholder="monto calculado" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 text-right">
                    <label for="cotizacion_proyecto_montos_costo_neto" class="control-label required">Costo Neto</label>
                </div>

                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_costo_neto" name="cotizacion_proyecto[montos][costo_neto]" required="required" data-format-number="1" placeholder="monto" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control" value="0">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>

            <div class="form-group">
                <div class="col-sm-5 text-right">
                    <label for="cotizacion_proyecto_montos_descuento" class="control-label required">Descuento</label>
                </div>

                <div class="col-sm-2 ">
                    <input type="text" id="cotizacion_proyecto_montos_descuento" name="cotizacion_proyecto[montos][descuento]" required="required" placeholder="monto calculado" maxlength="15" minlength="1" class="text-center form-control" value="0">
                </div>
                <div class="col-sm-1 no-padding-lr"><strong>%</strong> ==&gt;</div>


                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_monto_descuento" name="cotizacion_proyecto[montos][monto_descuento]" required="required" data-format-number="1" placeholder="monto calculado" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>

            <div class="form-group">
                <div class="col-sm-5 text-right">
                    <label for="cotizacion_proyecto_montos_iva" class="control-label required">I.V.A</label>
                </div>

                <div class="col-sm-2 ">
                    <input type="text" id="cotizacion_proyecto_montos_iva" name="cotizacion_proyecto[montos][iva]" required="required" placeholder="monto" maxlength="15" minlength="1" readonly="readonly" class="text-center form-control" value="19">
                </div>
                <div class="col-sm-1 no-padding-lr"><strong>%</strong> ==&gt;</div>


                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_monto_iva" name="cotizacion_proyecto[montos][monto_iva]" required="required" data-format-number="1" placeholder="monto" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 text-right">
                    <label for="cotizacion_proyecto_montos_total" class="control-label required">Total $</label>
                </div>

                <div class="col-sm-3">
                    <input type="text" id="cotizacion_proyecto_montos_total" name="cotizacion_proyecto[montos][total]" required="required" data-format-number="1" placeholder="monto calculado" maxlength="15" minlength="1" readonly="readonly" class="text-right form-control" value="0">
                </div>
                <div class="col-sm-1"><strong>$</strong></div>
            </div>


        </div>
        <div class="alert alert-warning text-center">
            <p><strong>"BancoEstado se reserva el derecho de adjudicar en forma parcial o total los items cotizados."</strong></p>
        </div>



        <input type="hidden" id="cotizacion_proyecto_trigger_action" name="cotizacion_proyecto[trigger_action]" value="Enviar cotización">
    </form>

    <div id="form-modal-noParticipa-proveedor_rechazo" class="modal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">
                        Rechazar / No participar
                    </h4>
                </div>
                <div class="modal-body">
                    <form name="proveedor_rechazo" method="post" id="proveedor_rechazo" workflow-form="1" data-display="modal">
                        <div class="form-group hidden">
                            <label class="control-label required">Fecha de rechazo</label>

                            <div class="col-sm-6">
                                <div id="proveedor_rechazo_fecha" class="datepickerctrl form-inline" data-date-end-date="+10000d" disabled="disabled">
                                    <div class="sr-only"></div><input type="text" id="proveedor_rechazo_fecha_date" name="proveedor_rechazo[fecha][date]" required="required" class="form-control" value="03/05/2021" autocomplete="off"><input type="text" id="proveedor_rechazo_fecha_time" name="proveedor_rechazo[fecha][time]" required="required" class="form-control" value="14:24">
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> <label class="control-label required">Motivo</label>
                            <div id="proveedor_rechazo_motivo">
                                <div class="radio"><label for="proveedor_rechazo_motivo_0" class="required"><input type="radio" id="proveedor_rechazo_motivo_0" name="proveedor_rechazo[motivo]" required="required" value="No es posible cumplir con los plazos"> No es posible cumplir con los plazos</label></div>
                                <div class="radio"><label for="proveedor_rechazo_motivo_1" class="required"><input type="radio" id="proveedor_rechazo_motivo_1" name="proveedor_rechazo[motivo]" required="required" value="Sin stock"> Sin stock</label></div>
                                <div class="radio"><label for="proveedor_rechazo_motivo_2" class="required"><input type="radio" id="proveedor_rechazo_motivo_2" name="proveedor_rechazo[motivo]" required="required" value="Otros"> Otros</label></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12 text-left ">
                                    <label class="control-label required" for="proveedor_rechazo_argumentacion">Argumentación</label>
                                    <textarea id="proveedor_rechazo_argumentacion" name="proveedor_rechazo[argumentacion]" required="required" maxlength="255" rows="3" placeholder="Argumentación" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>

                        <input type="hidden" id="proveedor_rechazo_tipo" name="proveedor_rechazo[tipo]" value="Rechazo Proveedor"><input type="hidden" id="proveedor_rechazo_trigger_action" name="proveedor_rechazo[trigger_action]" value="No participa">
                    </form>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-warning">Cancelar</button>

                    <button form="proveedor_rechazo" class="btn btn-warning btn-submit" data-loading-text="Procesando..." formnovalidate="">
                        Enviar
                    </button>

                </div>
            </div>
        </div>
    </div>

</div>