<!doctype html>
<html lang="en">
<?php include './head.php' ?>
<body>
    <!-- Wrapper -->

    <div class="wrapper-mobile">
        <!-- sidebar / lateral menu -->
        <?php include './partials/sidebar.php' ?>

        <div class="overlay-mobile"></div>
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
    <?php include './scripts.php' ?>
</body>
</html>