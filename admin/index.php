<?php
include "config.php";
session_start();

if (isset($_SESSION["username"])) {
    header("Location: {$hostname}/admin/post.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin_login.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <title>bloggy.com</title>
</head>

<body>
    <div class="all">
        <?php include "header.php" ?>
        <div id="main-content">

            <div class="admin-login-container">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                    <div class="input-group">
                        <input type="text" name="username" placeholder="user name" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-group-btn">
                        <button type="submit" name="login" class="btn">Login</button>
                    </div>

                </form>

                <?php
                if (isset($_POST['login'])) {
                    include "config.php";
                    if (empty($_POST['username']) || empty($_POST['password'])) {
                        die();
                    } else {
                        $username = mysqli_real_escape_string($con, $_POST['username']);
                        $password = md5($_POST['password']);

                        $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";

                        $result = mysqli_query($con, $sql) or die("Query Failed.");

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                session_start();
                                $_SESSION["username"] = $row['username'];
                                $_SESSION["user_id"] = $row['user_id'];
                                $_SESSION["user_role"] = $row['role'];

                                header("Location: {$hostname}/admin/post.php");
                            }
                        } else {
                ?>
                <script>
                alert("something went wrong");
                </script>
                <?php

                        }
                    }
                } ?>
            </div>

        </div>
        <?php include "footer.php"; ?>
    </div>
</body>

</html>