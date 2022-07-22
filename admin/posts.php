<?php
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'include/sessions.php';
include "classes/Database.php";
$database = new Database();
$database = $database->getConnection();

<<<<<<< HEAD
if (isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60 * 30)) {
=======
if (isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60 * 10)) {
>>>>>>> cf0da052f53dfbc13f5632682421592692375219
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

        <title>Admin Portal</title>

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
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>All Posts</h4>

                                    </div>
                                    <div class="card-body">
                                        <div style="float: right;">
<<<<<<< HEAD
                                            <label class="col-form-label">Search:
=======
                                            <label>Search:
>>>>>>> cf0da052f53dfbc13f5632682421592692375219
                                                <input type="text" class="form-control input-sm" placeholder="" onkeyup="myFunction()" id="searchinput" aria-controls="bootstrap-data-table-export">
                                            </label>
                                        </div>
                                        <div class="table-responsive">

                                            <table class="table table-hover " id="dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th>Author</th>
                                                        <th width="300">Short Desc.</th>
                                                        <th width="600">Long Desc.</th>
                                                        <th>Created Date</th>
<<<<<<< HEAD
                                                        <th width="200">Action</th>
=======
                                                        <th width="100">Action</th>
>>>>>>> cf0da052f53dfbc13f5632682421592692375219

                                                    </tr>
                                                </thead>
                                                <?php
                                                $sql = "SELECT * FROM posts WHERE status = 'Active'";
                                                $stmt = $database->prepare($sql);
                                                $stmt->execute();
                                                $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                                                $cnt = 1;
                                                if ($stmt->rowCount() > 0) {
                                                    foreach ($data as $result) {
                                                ?>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"><b><?php echo htmlentities($cnt); ?></b></th>
                                                                <td><?php echo htmlentities($result->title); ?></td>
                                                                <td><?php echo htmlentities($result->cat_id); ?></td>
                                                                <td><?php echo htmlentities($result->author); ?></td>
                                                                <td><?php echo htmlentities($result->short_desc); ?></td>
                                                                <td><?php echo htmlentities(substr($result->long_desc, 0, 400) . '...'); ?></td>
                                                                <td><?php echo htmlentities($result->created_at); ?></td>
                                                                <td class="color-primary">
                                                                    <span class="m-l-10">
                                                                        <a href="edit_posts.php?post_id=<?php echo htmlentities($result->id); ?>" title="Edit" id="edit">
                                                                            <i class="ti-check color-success"></i>
                                                                        </a>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <a href="posts.php?post_id=<?php echo htmlentities($result->id); ?>" post_id="<?php echo htmlentities($result->id); ?>" title="Delete" class="delete">
                                                                            <i class="ti-close color-danger"></i>
                                                                        </a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                    <?php $cnt++;
                                                    }
                                                } ?>
                                                        </tbody>
                                            </table>

                                            <!-- <div class="dataTables_paginate paging_simple_numbers" id="row-select_paginate">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">1</span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>

                                                </ul>

                                            </div> -->
                                            <nav id="pagination">
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                        </div>
                        <!-- /# row -->
                        <?php
                        // include "include/footer.php";
                        ?>

                    </section>
                </div>
            </div>
        </div>

        <script>
            $("#year").text(new Date().getFullYear());
        </script>
        <!-- Common -->
        <script src="js/lib/jquery.min.js"></script>
        <script src="js/lib/jquery.nanoscroller.min.js"></script>
        <script src="js/lib/menubar/sidebar.js"></script>
        <script src="js/lib/preloader/pace.min.js"></script>
        <script src="js/lib/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>

        <script type="text/javascript">
<<<<<<< HEAD
=======
            // Add Category
            $(document).ready(function($) {
                // on submit...
                $("#add_cat").click(function(e) {

                    e.preventDefault();

                    //category name required
                    var category_name = $("#category_name").val();
                    if (category_name == "") {
                        alert("category_name is required");
                        $("input#category_name").focus();
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "process.php",
                        data: {
                            action: "createCategory",
                            category_name: $("#category_name").val(),

                        }, // get all form field value in form
                        beforeSend: function() {
                            $("#add_cat").val("Processing...");
                        },
                        success: function(response) {
                            if (response == true) {
                                alert("Successful. Last Inserted Role is " +
                                    response);
                                $(location).attr('href', 'category.php');
                                $("#add_cat").val("Submit");
                                $("#category_name").val("");

                            } else if (response == false) {
                                alert("Error, Incorrect Details" + response);
                                $("#add_cat").val("Submit");
                            }
                        },
                    });
                });
                return false;
            });
>>>>>>> cf0da052f53dfbc13f5632682421592692375219

            // Delete Category
            $(document).ready(function($) {

                $(".delete").click(function(e) {
                    e.preventDefault();
<<<<<<< HEAD
                    var id = $(this).attr('post_id');
                    $.ajax({
                        type: "POST",
                        url: "process.php",
                        data: {
                            action: "deletePost",
=======
                    alert('Delete');
                    var id = $(this).attr('cat_id');
                    $.ajax({
                        type: "GET",
                        url: "process.php",
                        data: {
                            action: "deleteCategory",
>>>>>>> cf0da052f53dfbc13f5632682421592692375219
                            id: id
                        },
                        success: function(response) {
                            if (response == true) {
                                alert("Deleted Successfully");
                                $(location).attr('href', 'category.php');

                            } else if (response == false) {
                                alert("Error, Something went Wrong");
                                $(location).attr('href', 'category.php');

                            }
                        },
                    });
                });
            });

            // Search Table
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("searchinput");
                filter = input.value.toUpperCase();
                table = document.getElementById("dataTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
    </body>

    </html>
<?php } ?>