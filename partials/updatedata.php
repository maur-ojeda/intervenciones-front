


<div class="update-data">
    <div class="card">
        <div class="card-header bg-white">
            <h6><small class="text-muted">Bienvenido:</small></br>[Mario Edgardo Hernández Lucero]</h6>
            <h6><small class="text-muted">Tu área de trabajo es:</small><br />[Subgerencia Infraestructura]</h6>
        </div>

        <div class="card-body">

            <div class="card-block">
                <ul class="list-group">
                    <li class="list-group-item"><small>
                        <b>Dirección:</b>
                         [Morandé 25 piso 8, Santiago, Región Metropolitana de Santiago]
                        </small>
                    </li>
                    <li class="list-group-item">
                    <small>
                    <b>Centro de costo:</b> [5158]
                    </small>
                </li>
                    <li class="list-group-item">
                    <small><b>
                    Sucursal:</b>     [Subgerencia Infraestructura] </small></li>
                </ul>
            </div>
        </div>

        <div class="card-footer bg-white">
            <h6 class="text-center">¿Te Cambiaste de sucursal?, Actualiza tus datos.</h6> <a name="" id="" class="btn btn-block btn-customized" href="#" role="button" data-toggle="modal" data-target="#change-office-modal">Cambiar datos</a>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="change-office-modal" role="dialog" aria-labelledby="change-office-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar datos de área de trabajo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Sucursales</label>
                        <select class="sucursales" name="">
                            <option value="1">Sucursal 1 </option>
                            <option value="2">Sucursal 2 </option>
                            <option value="3">Sucursal 3 </option>
                            <option value="4">Sucursal 4 </option>
                            <option value="5">Sucursal 5 </option>
                        </select>
                    </div>

                    


                    <h5 class="mt-1">Datos sucursal / área central</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Dirección: [Morandé 25 piso 8]
                        </li>
                        <li class="list-group-item">Comuna: [Santiago, Región Metropolitana de Santiago]</li>
                        <li class="list-group-item">Centro de costo: [5158] </li>
                    </ul>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-customized" data-dismiss="modal" onclick="showAlert()">Actualizar</button>
                </div>
            </div>
        </div>
    </div>