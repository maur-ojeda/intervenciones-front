<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            //select 2
            $('.sucursales').select2();

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

            //alert

            function actualizaDatos() {

                swal({
                    title: "Operación exitosa!",
                    text: "se han actualizado los datos",
                    icon: "success",
                    button: "Aceptar",

                });
            }




        });
    </script>
