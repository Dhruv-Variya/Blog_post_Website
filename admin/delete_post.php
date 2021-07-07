<?php
  include "config.php";

  $post_id = $_GET['id'];
 

  $sql1 = "SELECT * FROM post WHERE post_id = {$post_id}";
  $result = mysqli_query($con, $sql1) or die("Query Failed : Select");
  $row = mysqli_fetch_assoc($result);

  unlink("upload/".$row['post_img']);

  $sql = "DELETE FROM post WHERE post_id = {$post_id};";
  

  if(mysqli_multi_query($con, $sql)){
    header("location: {$hostname}/admin/post.php");
  }else{
    echo "Query Failed";
  }
?>