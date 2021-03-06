<?php
$pages = explode('/', $_SERVER['PHP_SELF']);
$page = end($pages);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?? "" ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/dropify/dist/css/dropify.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<?= URL ?>css/custome.css">
    <link rel="stylesheet" href="./vendors/toastr/toastr.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logo6.png"/>

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <script src="./vendors/toastr/toastr.js"></script>
    <script src="./js/formSubmit.js"></script>
    <script src="./js/loader.js"></script>
    <script src="<?= URL ?>js/off-canvas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="javascript:">
                    <img src="./images/logo6.png" alt="Asnaf committee">
                </a>
                <a class="navbar-brand brand-logo-mini" href="javascript:">
                    <img src="./images/logo6.png" alt="Asnaf committee">
                </a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <?php
            if (isset($_SESSION['loggedin'])) {
                ?>
                <h4 class="text-center w-100"><?= $mosque_name ?></h4>
                <?php
            }
            ?>
            <ul class="navbar-nav w-100">
                <?php
                if (!isset($_SESSION['loggedin']) && ($page == 'donors_public.php' || $page == 'index.php' || $page == 'Index.php')) {
                    ?>
                    <li style="width: 90%;">
                        <?php include_once('./partials/searchform.php') ?>
                    </li>
                    <?php
                }
                ?>

            </ul>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    <?php
                    if (isset($_SESSION['loggedin'])) {
                        ?>
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name"><?= $user_name ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                             aria-labelledby="profileDropdown">
                            <a href="logout.php" class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                            <a href="<?= URL ?>update.php" class="dropdown-item">
                                <i class="mdi mdi-update text-primary"></i>
                                Update Profile
                            </a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <a class="nav-link text-primary" href="login.php">Login</a>
                        <?php
                    }
                    ?>
                </li>
                <?php
                if (!isset($_SESSION['loggedin']) && ($page != 'reportasnaf.php')) {
                    ?>
                    <li class="my-auto d-none d-sm-block">
                        <a class="btn btn-success save_as" onclick="printDiv('printContent')">
                            <span class="text-white">Print</span>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include('_sidebar.php');
        ?>
        <!-- partial -->
        <div class="main-panel">
            <?php include_once('loader.php') ?>
