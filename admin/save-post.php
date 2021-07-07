<?php
include "config.php";
if (isset($_FILES['fileToUpload'])) {
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_exts = explode('.', $file_name);
    $file_ext = end($file_exts);
    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    }

    if ($file_size > 20097152) {
        $errors[] = "File size must be 20mb or lower.";
    }
    $new_name = time() . "-" . basename($file_name);
    $target = "upload/" . $new_name;

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $target);
    } else {
        print_r($errors);
        die();
    }
}

session_start();
$title = mysqli_real_escape_string($con, $_POST['post_title']);
$description = mysqli_real_escape_string($con, $_POST['postdesc']);
$post_author = mysqli_real_escape_string($con, $_POST['post_author']);
$date = date("d M, Y");
$author = $_SESSION['user_id'];

$sql = "INSERT INTO `post`(title,description,post_author,post_date,author,post_img) 
VALUES ('$title','$description','$post_author','$date','$author','$new_name');";


if (mysqli_query($con, $sql)) {
    header("location: {$hostname}/admin/post.php");
} else {
    echo "<div class='alert alert-danger'>Query</div>";
}