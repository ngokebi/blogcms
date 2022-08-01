<?php
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'include/sessions.php';
include "classes/Database.php";
$database = new Database();
$database = $database->getConnection();

if (isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60 * 30)) {

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
        <script src="https://cdn.tiny.cloud/1/96mnsk10pkg2eoqov5j9uvwckxdsvqkplraribk3dkypc1fi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-title">
                                        <h2>Add Post</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="basic-form">
                                            <form method="POST">
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label">Title:</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label">Author:</label>
                                                    <input type="text" class="form-control" name="author" id="author" placeholder="Author">
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label">Uploaded By</label>
                                                    <select class="form-control" name="uploaded_by" id="uploaded_by" autocomplete="off">
                                                        <option value="">Choose..</option>
                                                        <?php $sql = "SELECT * From users";
                                                        $query = $database->prepare($sql);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $result) {   ?>
                                                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->username); ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label">Category</label>
                                                    <select class="form-control" name="cat_id" id="cat_id" autocomplete="off">
                                                        <option value="">Choose..</option>
                                                        <?php $sql = "SELECT * From category";
                                                        $query = $database->prepare($sql);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $result) {   ?>
                                                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->category_name); ?></option>
                                                        <?php }
                                                        } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label">Short Description</label>
                                                    <input type="text" class="form-control" name="short_desc" id="short_desc" placeholder="Short Description">
                                                </div>
                                                <div class="form-group col-sm-8">
                                                    <label class="col-form-label">Long Description</label>
                                                    <textarea class="form-control" rows="5" placeholder="Long Description" name="long_desc" id="long_desc"></textarea>
                                                </div>
                                                <button type="submit" name="add_post" id="add_post" class="btn btn-primary btn-rounded m-b-10">Submit</button>
                                                <a href="posts.php" class="btn btn-secondary btn-rounded m-b-10">Back</a>
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
            // Add Post
            $(document).ready(function($) {

                $("#add_post").click(function(e) {

                    e.preventDefault();
                    tinyMCE.triggerSave();

                    // Title required
                    var title = $("#title").val();
                    if (title == "") {
                        alert("Title is required");
                        $("input#title").focus();
                        return false;
                    }
                    // Author required
                    var author = $("#author").val();
                    if (author == "") {
                        alert("Author is required");
                        $("input#author").focus();
                        return false;
                    }

                    // User required
                    var uploaded_by = $("#uploaded_by").val();
                    if (uploaded_by == "") {
                        alert("User is required");
                        $("input#uploaded_by").focus();
                        return false;
                    }
                    // Category required
                    var cat_id = $("#cat_id").val();
                    if (cat_id == "") {
                        alert("Category is required");
                        $("input#cat_id").focus();
                        return false;
                    }
                    // Short Description required
                    var short_desc = $("#short_desc").val();
                    if (short_desc == "") {
                        alert("Short Content is required");
                        $("input#short_desc").focus();
                        return false;
                    }
                    // Long Description required
                    var long_desc = $("#long_desc").val();
                    if (long_desc == "") {
                        alert("Main Content is required");
                        $("input#long_desc").focus();
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "process.php",
                        data: {
                            action: "createPost",
                            title: title,
                            author: author,
                            uploaded_by: uploaded_by,
                            cat_id: cat_id,
                            short_desc: short_desc,
                            long_desc: long_desc

                        },
                        beforeSend: function() {
                            $("#add_post").val("Processing...");
                        },
                        success: function(response) {
                            if (response == true) {
                                alert("Post Successfully Inserted");
                                $(location).attr('href', 'posts.php');

                            } else if (response == false) {
                                alert("Error, Incorrect Details" + response);
                                $("#add_post").val("Submit");
                            }
                        },
                    });
                });
                return false;
            });
        </script>
          <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
      toolbar_mode: 'floating',
    });
    tinymce.triggerSave();
  </script>
    </body>

    </html>
<?php } ?>