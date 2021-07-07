<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>bloggy.com</title>
</head>


<body>
    <div class="all">
        <?php include "header.php" ?>


        <div id="main-content">

            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <div class="search-box-container">
                            <h4>Search Articles Here</h4>
                            <form class="search-post" action="search.php" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search .....">
                                    <span class="input-group-btn">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-danger">Search</button>
                                        </div>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="post-container">
                            <div class="content">
                                <div class="content-top">
                                    <img src="admin/upload/home.svg" alt="iBlog">
                                </div>
                                <div class="content-bottom">
                                    <p class="hp">Right Place For Blogers</p>
                                    <p>Bloggy.com is a website which lets you read  articles and upload  articles.</p>
                                    <p>You Can Search Articles Here In Search Engine . </p>
                                    <p>You Can Search Articles By Title, Description And Author Of Article .</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php include 'slidebar.php'; ?>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </div>
</body>


</html>