<!doctype html>
<html lang="en">

<head>
    <title>Index bs4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="./scss/style-mobile.min.css">
    <!-- customscrollbar CSS -->
    <link rel="stylesheet" href="./jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css">
</head>

<body>
    <!-- Wrapper -->

    <div class="wrapper-mobile">
        <!-- sidebar / lateral menu -->
        <nav class="sidebar-mobile">
            <!-- close sidebar menu -->
            <div class="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="sidebar-mobile-header">
                <div class="sidebar-mobile-imagen"><img src="https://clientes.srb.agenciasur.cl/assets/img/logo-bcoestado.jpg" alt="Banco Estado"></div>
                <div class="sidebar-mobile-slogan">Sistema de Requerimientos Corporativo</div>
            </div>


            <ul class="list-unstyled menu-elements">
                <li>
                    <p>
                        name tag
                    </p>
                </li>
                <li>
                    <a href="#drop1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                        Intervenciones Obras <br />Civiles
                    </a>
                    <ul class="collapse list-unstyled" id="drop1">
                        <li>
                            <a class="scroll-link" href="./evaluador-dashboard.html">Estados de Solicitudes</a>
                        </li>
                        <li>
                            <a href="#drop2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                                drop down 2
                            </a>
                            <ul class="collapse list-unstyled" id="drop2">
                                <li>
                                    <a href="javascript:;"> item drop</a>
                                </li>
                                <li>

                                    <a href="#drop3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                                        drop down 3
                                    </a>
                                    <ul class="collapse list-unstyled" id="drop3">
                                        <li>
                                            <a href="javascript:;"> item drop</a>
                                        </li>
                                        <li>
                                            <a href="#drop4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                                                drop down 4
                                            </a>
                                            <ul class="collapse list-unstyled" id="drop4">
                                                <li>
                                                    <a href="javascript:;"> item drop</a>
                                                </li>
                                                <li>
                                                    <a href="#drop5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                                                        drop down 5
                                                    </a>
                                                    <ul class="collapse list-unstyled" id="drop5">
                                                        <li>
                                                            <a href="javascript:;"> item drop</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> item drop</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="scroll-link" href="javascript:;"> item</a>
                </li>
                <li>
                    <a class="scroll-link" href="javascript:;"> item</a>
                </li>
                <li>
                    <a class="scroll-link" href="javascript:;"> item</a>
                </li>
                <li>
                    <a class="scroll-link" href="javascript:;"> item</a>
                </li>
                <li>
                    <a class="scroll-link" href="javascript:;"> item</a>
                </li>
                <li>
                    <a href="#dropdownn" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
                        drop down
                    </a>
                    <ul class="collapse list-unstyled" id="dropdownn">
                        <li>
                            <a class="scroll-link" href="javascript:;"> item drop</a>
                        </li>
                        <li>
                            <a class="scroll-link" href="javascript:;"> item drop</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <!-- / sidebar -->
        <!-- overlay -->
        <div class="overlay-mobile"></div>
        <!-- / overlay -->

        <!-- content -->
        <div class="content-mobile">
            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i>
            </a>


            <div class="inner-content">

                <?php include './partials/header.php' ?>
                <?php include './partials/aprover/dashboard.php' ?>
            </div>



        </div>
          <!-- / content -->
          </div>

<!-- End wrapper -->
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {

        tableSelector(0);


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
                title: "Operación exitosa!",
                text: "se han actualizado los datos",
                icon: "success",
                button: "Aceptar",

            });
        }

        function enviaDatos() {

            swal({
                title: "Operación exitosa!",
                text: "se han realizado la operación",
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
                        $(this).css({
                            display: "none"
                        });
                    } else {
                        $(this).css({
                            display: "block"
                        });
                    }
                });

            $("#selectorPanel").change(function() {
                panelToShow = $(this).val();
                $(".dataTables_wrapper")
                    .each(function(index) {
                        $(this).css({
                            display: "none"
                        });
                    });
                $("." + panelToShow).toggle();
            });
        }



    });
</script>

</body>

</html>