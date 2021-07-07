<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>bloggy.com</title>
</head>


<body>
    <div class="all">
        <?php include "header.php" ?>
        <div id="main-content">

            <div class="contact-container">
                <form action="" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">contact us</p>
                    <div class="input-group">
                        <input type="text" placeholder="name" name="name" value="" required>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Email" name="email" value="" required>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="phone number" name="phone_number" value="" required>
                    </div>
                    <div class="input-group">
                        <textarea type="text" placeholder="How may we help you?" required></textarea>
                    </div>
                    <div class="input-group-btn">
                        <button name="submit" class="btn">send</button>
                    </div>

                </form>
            </div>


        </div>
        <?php include "footer.php"; ?>
    </div>
</body>


</html>