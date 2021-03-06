<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {

            tableSelector(0);

            //select 2
            $('.sucursales').select2();
            $('#cotizacion_proyecto_partidas_items_4_partida').select2();
            $('.js-example-basic-single').select2();

            // menu functions
            $('.dismiss, .overlay-mobile').on('click', function() {
                $('.sidebar-mobile').removeClass('active');
                $('.overlay-mobile').removeClass('active');
            });

            $('.open-menu').on('click', function(e) {
                e.preventDefault();
                $('.sidebar-mobile').addClass('active');
                $('.overlay-mobile').addClass('active');
                // close opened sub-menus
                $('.collapse.show').toggleClass('show');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            //scrollbar menu
            $('.sidebar-mobile').mCustomScrollbar({
                theme: "minimal-dark"
            })

            //modal
            $("#change-office-modal").on('hidden.bs.modal', function() {
                actualizaDatos();

            });

            $("#aproverModalAprove").on('hidden.bs.modal', function() {
                enviaDatos();
            });
            $("#aproverModalReject").on('hidden.bs.modal', function() {
                enviaDatos();
            });
            $("#aproverModalInfo").on('hidden.bs.modal', function() {
                enviaDatos();
            });










            //alert

            function actualizaDatos() {

                swal({
                    title: "Operaci??n exitosa!",
                    text: "se han actualizado los datos",
                    icon: "success",
                    button: "Aceptar",

                });
            }

            function enviaDatos() {

swal({
    title: "Operaci??n exitosa!",
    text: "se han realizado la operaci??n",
    icon: "success",
    button: "Aceptar",

});
}


            /** tableSelector
 * panel0 = solicitudes por revisar
 * panel1 = solicitudes en proceso
 * panel2 = solicitudes historicas
 *  */
function tableSelector(initialTable) {
   

    $(".dataTables_wrapper")
        .each(function(index) {
            $(this).addClass("panel" + index);
            if (index != initialTable) {
                $(this).css({ display: "none" });
            } else {
                $(this).css({ display: "block" });
            }
        });

    $("#selectorPanel").change(function() {
        panelToShow = $(this).val();
        $(".dataTables_wrapper")
            .each(function(index) {
                $(this).css({ display: "none" });
            });
        $("." + panelToShow).toggle();
    });
}


//validacion formularios
/*
incluir en cada campo a validar 

 data-rule-required="true" 
 aria-invalid="true" 
 data-msg-required="mensaje de error"

*/


$("#gestor_inmuebles_aprobacion").validate({
    errorElement: "p",
    errorLabelContainer: $("#gestor_inmuebles_aprobacion div.error-form-modal")
});


$("#gestor_inmuebles_rechazo").validate({
    errorElement: "p",
    errorLabelContainer: $("#gestor_inmuebles_rechazo div.error-form-modal")
});


$("#mas_informacion").validate({
    errorElement: "p",
    errorLabelContainer: $("#mas_informacion div.error-form-modal")
});






$('#cotizacion_proyecto').find(".glyphicon.glyphicon-info-sign").addClass('fa fa-info-circle')
$('#cotizacion_proyecto').find(".glyphicon.glyphicon-plus").addClass('fa fa-plus')
$('#cotizacion_proyecto').find(".glyphicon.glyphicon-minus").addClass('fa fa-minus')



$('#cotizacion-partidas-items').find('.col-md-12').addClass('table-responsive-sm')
$('#cotizacion-partidas-items').find('.table').addClass('table-inverse table-responsive')











});




	

    </script>
