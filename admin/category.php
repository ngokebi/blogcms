<?php
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60 * 10)) {
    session_unset();
    session_destroy();
    header('Location: logout.php');
} else {
    session_regenerate_id(true);
    $_SESSION['last_acted_on'] = time();
}

if (empty($_SESSION['username'])) {
    header('location: login.html');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Focus Admin Dashboard</title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Toastr -->
        <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
        <!-- Sweet Alert -->
        <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
        <!-- Range Slider -->
        <link href="css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
        <link href="css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
        <!-- Bar Rating -->
        <link href="css/lib/barRating/barRating.css" rel="stylesheet">
        <!-- Nestable -->
        <link href="css/lib/nestable/nestable.css" rel="stylesheet">
        <!-- JsGrid -->
        <link href="css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
        <link href="css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
        <!-- Datatable -->
        <link href="css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
        <link href="css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
        <!-- Calender 2 -->
        <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <!-- Weather Icon -->
        <link href="css/lib/weather-icons.css" rel="stylesheet" />
        <!-- Owl Carousel -->
        <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <!-- Select2 -->
        <link href="css/lib/select2/select2.min.css" rel="stylesheet">
        <!-- Chartist -->
        <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
        <!-- Calender -->
        <link href="css/lib/calendar/fullcalendar.css" rel="stylesheet" />

        <!-- Common -->
        <link href="css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="css/lib/themify-icons.css" rel="stylesheet">
        <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="css/lib/helper.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <?php
        include "include/sidebar.php"; ?>
        <!-- /# sidebar -->

        <?php
        include "include/header.php"; ?>

        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <?php
                    include "include/breadcrumb.php"; ?>
                    <!-- /# row -->
                    <section id="main-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>All Category</h4>

                                    </div>
                                    <div class="card-body">
                                        <div style="float: right ;">
                                            <label>Search:
                                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="bootstrap-data-table-export">
                                            </label>
                                        </div>
                                        <div class="table-responsive">

                                            <table class="table table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Created Date</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Kolor Tea Shirt For Man</td>
                                                        <td>January 22</td>
                                                        <td class="color-primary">
                                                            <span class="m-l-10">
                                                                <a href="#" title="Edit">
                                                                    <i class="ti-check color-success"></i>
                                                                </a>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                                <a href="#" title="Delete">
                                                                    <i class="ti-close color-danger"></i>
                                                                </a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="dataTables_paginate paging_simple_numbers" id="row-select_paginate">
                                                <ul class="pagination justify-content-end">
                                                    <li class="paginate_button  previous disabled" id="row-select_previous"><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="0" tabindex="0">Previous</a></li>
                                                    <li class="paginate_button  active"><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="1" tabindex="0">1</a></li>
                                                    <li class="paginate_button  "><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="2" tabindex="0">2</a></li>
                                                    <li class="paginate_button  "><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="3" tabindex="0">3</a></li>
                                                    <li class="paginate_button  "><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="4" tabindex="0">4</a></li>
                                                    <li class="paginate_button  "><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="5" tabindex="0">5</a></li>
                                                    <li class="paginate_button  "><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="6" tabindex="0">6</a></li>
                                                    <li class="paginate_button  next" id="row-select_next"><a href="#" class="page-link" aria-controls="row-select" data-dt-idx="7" tabindex="0">Next</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Input Style</h4>

                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form>
                                                <div class="form-group col-sm-8">
                                                    <label>Category Name:</label>
                                                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name">
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" name="submit" id="submit" class="btn btn-primary btn-rounded m-b-10">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# column -->
                        </div>
                        <!-- /# row -->
<?php
include "include/footer.php";
?>

                    </section>
                </div>
            </div>
        </div>




        <!-- Common -->
        <script src="js/lib/jquery.min.js"></script>
        <script src="js/lib/jquery.nanoscroller.min.js"></script>
        <script src="js/lib/menubar/sidebar.js"></script>
        <script src="js/lib/preloader/pace.min.js"></script>
        <script src="js/lib/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            $("#year").text(new Date().getFullYear());
        </script>
        <!-- Datatable -->
        <script src="js/lib/data-table/datatables.min.js"></script>
        <script src="js/lib/data-table/buttons.dataTables.min.js"></script>
        <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="js/lib/data-table/buttons.flash.min.js"></script>
        <script src="js/lib/data-table/jszip.min.js"></script>
        <script src="js/lib/data-table/pdfmake.min.js"></script>
        <script src="js/lib/data-table/vfs_fonts.js"></script>
        <script src="js/lib/data-table/buttons.html5.min.js"></script>
        <script src="js/lib/data-table/buttons.print.min.js"></script>
        <script src="js/lib/data-table/datatables-init.js"></script>

        <!-- JS Grid -->
        <script src="js/lib/jsgrid/db.js"></script>
        <script src="js/lib/jsgrid/jsgrid.core.js"></script>
        <script src="js/lib/jsgrid/jsgrid.load-indicator.js"></script>
        <script src="js/lib/jsgrid/jsgrid.load-strategies.js"></script>
        <script src="js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
        <script src="js/lib/jsgrid/jsgrid.field.js"></script>
        <script src="js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
        <script src="js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
        <script src="js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
        <script src="js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
        <script src="js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
        <script src="js/lib/jsgrid/jsgrid-init.js"></script>

        <!--  Datamap -->
        <script src="js/lib/datamap/d3.min.js"></script>
        <script src="js/lib/datamap/topojson.js"></script>
        <script src="js/lib/datamap/datamaps.world.min.js"></script>
        <script src="js/lib/datamap/datamap-init.js"></script>

        <!--  Nestable -->
        <script src="js/lib/nestable/jquery.nestable.js"></script>
        <script src="js/lib/nestable/nestable.init.js"></script>

        <!--ION Range Slider JS-->
        <script src="js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="js/lib/rangeSlider/moment.js"></script>
        <script src="js/lib/rangeSlider/moment-with-locales.js"></script>
        <script src="js/lib/rangeSlider/rangeslider.init.js"></script>

        <!-- Bar Rating-->
        <script src="js/lib/barRating/jquery.barrating.js"></script>
        <script src="js/lib/barRating/barRating.init.js"></script>

        <!-- jRate -->
        <script src="js/lib/rating1/jRate.min.js"></script>
        <script src="js/lib/rating1/jRate.init.js"></script>

        <!-- Sweet Alert -->
        <script src="js/lib/sweetalert/sweetalert.min.js"></script>
        <script src="js/lib/sweetalert/sweetalert.init.js"></script>

        <!-- Toastr -->
        <script src="js/lib/toastr/toastr.min.js"></script>
        <script src="js/lib/toastr/toastr.init.js"></script>

        <!--  Dashboard 1 -->
        <script src="js/dashboard1.js"></script>
        <script src="js/dashboard2.js"></script>

    </body>

    </html>
<?php } ?>