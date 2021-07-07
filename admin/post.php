<?php
include "config.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: {$hostname}/admin/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/post.css">
    <title>bloggy.com</title>
</head>


<body>
    <div class="all">
        <?php include "header1.php" ?>
        <div id="main-content">

            <div class="admin-post-container">
                <div class="blogpost-meta">
                    <div class="author-info">
                        <div>
                            <b>
                                hello <?php echo $_SESSION['username']; ?>
                            </b>
                        </div>

                    </div>
                    <div class="social">
                        <form action="add_post.php" method="POST" class="login-email">
                            <div class="input-group-btn">
                                <button name="submit" class="btn">add post</button>
                            </div>

                        </form>

                    </div>
                </div>
                <?php
                include "config.php";

                $limit = 4;
                if ($_SESSION["user_role"] == '1') {
                    /* select query of post table for admin user */
                    $sql = "SELECT * FROM post LEFT JOIN user ON post.author = user.user_id
                    ORDER BY post.post_id DESC LIMIT {$limit}";
                } elseif ($_SESSION["user_role"] == '0') {
                    /* select query of post table for normal user */
                    $sql = "SELECT * FROM post
                    LEFT JOIN user ON post.author = user.user_id
                    WHERE post.author = {$_SESSION['user_id']}
                    ORDER BY post.post_id DESC LIMIT {$limit}";
                }

                $result = mysqli_query($con, $sql) or die("Query Failed.");
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Title</th>
                        <th>Author name</th>
                        <th>Upload date</th>
                        <th>post admin</th>
                        <th>Delete</th>
                        <!-- <th>Edit</th> -->
                    </thead>
                    <tbody>

                        <?php
                            $serial = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class='id' data-label="S.No."><?php echo $serial; ?></td>
                            <td data-label="Title"><?php echo $row['title']; ?></td>
                            <td data-label="Author name"><?php echo $row['post_author']; ?></td>
                            <td data-label="Upload date"><?php echo $row['post_date']; ?></td>
                            <td data-label="Post admin"><?php echo $row['username']; ?></td>
                            <td data-label="Delete" class="delete">
                            <a href='delete_post.php?id=<?php echo $row['post_id']; ?>'> <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path
                                        d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306">
                                    </path>
                                </svg>
                            </td>
                        </tr>
                        <?php
                                $serial++;
                            } ?>
                        <?php
                    } else {
                        echo "<h3>Not Uploaded Any Articles</h3>";
                    } ?>
                    </tbody>
                </table>
            </div>


        </div>
        <?php include "footer.php"; ?>
    </div>
</body>


</html>