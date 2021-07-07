<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/utils.css">
    <link rel="stylesheet" href="../css/add_post.css">
    <title>bloggy.com</title>
</head>


<body>
    <div class="all">
        <?php include "header1.php" ?>
        <div id="main-content">

            <div class="contact-container">
                <form action="save-post.php" class=" login-email" method="POST" enctype="multipart/form-data">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">add new post</p>
                    <div class="input-group">
                        <label class="label" for="post_title"><b>Title</b></label>
                        <input type="text" name="post_title" value="" autocomplete="off" required>
                    </div>
                    <div class="input-group">
                        <label for="exampleInputPassword1"><b>Author</b></label>
                        <input type="text" name="post_author" value="" required>
                    </div>
                    <div class="input-group-post_img">
                        <label for="exampleInputPassword1"><b>Post Image</b></label>
                        <input type="file" name="fileToUpload" required>
                    </div>
                    <div class="input-group">
                        <label for="exampleInputPassword1"><b>Description</b></label>
                        <textarea type="text" name="postdesc" required></textarea>
                    </div>
                    <div class="input-group-btn">
                        <button name="submit" class="btn">Upload</button>
                    </div>

                </form>
            </div>


        </div>
        <?php include "footer.php"; ?>
    </div>
</body>


</html>