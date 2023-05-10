<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'include/sessions.php';
include "classes/Database.php";
$database = new Database();
$database = $database->getConnection();

if (isset($_POST['submit'])) {

    $post_image_id = $_POST['id'];
    $image_url = $_FILES["image_url"]["name"];

    $extension = substr($image_url, strlen($image_url) - 4, strlen($image_url));
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");

    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>
        alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');
        window.location.href='edit_post_image.php';
        </script>";
    } else {
        $imgnewfile = md5($image_url) . $extension;

        move_uploaded_file($_FILES["image_url"]["tmp_name"], "post_images/" . $imgnewfile);

        $sql = "UPDATE image SET image_url = :image_url WHERE id = :id";
        $stmt = $database->prepare($sql);
        $stmt->bindValue(':image_url', $imgnewfile);
        $stmt->bindValue(':id', $post_image_id, PDO::PARAM_INT);
        $result = $stmt->execute();
        if ($result) {
            echo "<script>
            alert('Data Updated successfully');
            window.location.href='post_image.php';
            </script>";
            // header("location: post_image.php");
        } else {
            echo "<script>alert('Data not inserted');</script>";
        }
    }
}