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



<?php
if (isset($_POST['save'])) {
    include "config.php";

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $user = mysqli_real_escape_string($con, $_POST['uname']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    $role = mysqli_real_escape_string($con, $_POST['role']);

    $sql = "SELECT username FROM user WHERE username = '{$user}'";

    $result = mysqli_query($con, $sql) or die("Query Failed.");

    if (mysqli_num_rows($result) > 0) {
?>
<script>
alert("user name ralreeady tacken");
</script>
<?php
    } else {
        $sql1 = "INSERT INTO user (full_name,phone_number,email,username, password, role)
                VALUES ('{$fname}','{$phone_number}','{$email}','{$user}','{$password}','{$role}')";
        if (mysqli_query($con, $sql1)) {
            header("Location: {$hostname}/admin/user.php");
        ?>
<script>
alert("user registered successfully");
</script>
<?php
        } else {
        ?>
<script>
alert("something went wrong");
</script>
<?php
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/utils.css">
    <link rel="stylesheet" href="../css/add_user.css">
    <title>bloggy.com</title>
</head>


<body>
    <div class="all">
        <?php include "header1.php" ?>
        <div id="main-content">

            <div class="contact-container">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add user</p>
                    <div class="input-group">

                        <input type="text" name="fname" placeholder="full name" value="" required>
                    </div>
                    <div class="input-group">

                        <input type="text" name="phone_number" placeholder="phone number" value="" required>
                    </div>
                    <div class="input-group">

                        <input type="text" name="email" placeholder="email" value="" required>
                    </div>

                    <div class="input-group">

                        <input type="text" name="uname" placeholder="user name" value="" required>
                    </div>
                    <div class="input-group">

                        <input type="password" name="password" placeholder="password" value="" required>
                    </div>
                    <div class="input group">
                        <label for="exampleInputPassword1"><b>user role</b></label>
                        <select class="select" name="role">
                            <option value="0">Normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="input-group-btn">
                        <button name="save" class="btn">register</button>
                    </div>

                </form>
            </div>


        </div>
        <?php include "footer.php"; ?>
    </div>
</body>


</html>