<?php
include "config.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: {$hostname}/admin/");
}
if ($_SESSION["user_role"] == '0') {
    header("Location: {$hostname}/admin/post.php");
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
                        <form action="add_user.php" method="POST" class="login-email">
                            <div class="input-group-btn">
                                <button name="submit" class="btn">add user</button>
                            </div>

                        </form>

                    </div>
                </div>

                <?php
                include "config.php"; // database configuration
                /* Calculate Offset Code */
                $limit = 4;

                $sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT {$limit}";
                $result = mysqli_query($con, $sql) or die("Query Failed.");
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Role</th>
                        <th>Delete</th>
                        <!-- <th>Edit</th>
                         -->
                    </thead>
                    <tbody>
                        <?php
                            $serial = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <tr>
                            <td class='id' data-label="S.No."><?php echo $serial; ?></td>
                            <td data-label="Full Name"><?php echo $row['full_name']; ?></td>
                            <td data-label="User Name"><?php echo $row['username']; ?></td>
                            <td data-label="Role"><?php
                                                            if ($row['role'] == 1) {
                                                                echo "Admin";
                                                            } else {
                                                                echo "Normal";
                                                            }
                                                            ?></td>

                             <td data-label="Delete" class="delete">
                             <a href='delete_user.php?id=<?php echo $row["user_id"]; ?>'><svg class="svg-icon" viewBox="0 0 20 20">
                                    <path
                                        d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306">
                                    </path>
                                </svg></a>
                            </td>
                                <!-- <td class="edit">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path
                                        d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z">
                                    </path>
                                </svg>
                            </td>  -->
                            
                        </tr>
                        <?php
                                $serial++;
                            } ?>
                        <?php
                    } else {
                        echo "<h3>No Results Found.</h3>";
                    } ?>
                    </tbody>
                </table>
            </div>


        </div>
        <?php include "footer.php"; ?>
    </div>
</body>


</html>