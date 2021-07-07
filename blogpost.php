<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blogpost.css">
    <link rel="stylesheet" href="css/mobile.css">

    <title>bloggy.com</title>
</head>


<body>
    <div class="all">
        <?php include "header.php" ?>


        <div id="main-content">
            <!-- <div class="main-content"> -->
            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <div class="search-box-container">
                            <h4>Search</h4>
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
                            <?php
                            include "config.php";

                            $post_id = $_GET['id'];

                            $sql = "SELECT * FROM post  WHERE post.post_id = {$post_id}";

                            $result = mysqli_query($con, $sql) or die("Query Failed.");
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="content-blogpost">
                                <p><?php echo $row['title']; ?></p>
                                <div class="blogpost-meta">
                                    <div class="author-info">
                                        <div>
                                            <b>
                                                <?php echo $row['post_author']; ?>
                                            </b>
                                        </div>
                                        <div><?php echo $row['post_date']; ?></div>
                                    </div>
                                    <div class="social">
                                        <a href="https://twitter.com/tweeter?lang=en" target="_blank"><svg width="29" height="29" class="hk">
                                                <path
                                                    d="M22.05 7.54a4.47 4.47 0 0 0-3.3-1.46 4.53 4.53 0 0 0-4.53 4.53c0 .35.04.7.08 1.05A12.9 12.9 0 0 1 5 6.89a5.1 5.1 0 0 0-.65 2.26c.03 1.6.83 2.99 2.02 3.79a4.3 4.3 0 0 1-2.02-.57v.08a4.55 4.55 0 0 0 3.63 4.44c-.4.08-.8.13-1.21.16l-.81-.08a4.54 4.54 0 0 0 4.2 3.15 9.56 9.56 0 0 1-5.66 1.94l-1.05-.08c2 1.27 4.38 2.02 6.94 2.02 8.3 0 12.86-6.9 12.84-12.85.02-.24 0-.43 0-.65a8.68 8.68 0 0 0 2.26-2.34c-.82.38-1.7.62-2.6.72a4.37 4.37 0 0 0 1.95-2.51c-.84.53-1.81.9-2.83 1.13z">
                                                </path>
                                            </svg></a>
                                            <a href="https://in.linkedin.com/" target="_blank"><svg style="background: black;
                                              border-radius: 21px;" width="29" height="29" viewBox="0 0 29 29"
                                            fill="none" class="hk">
                                            <path
                                                d="M5 6.36C5 5.61 5.63 5 6.4 5h16.2c.77 0 1.4.61 1.4 1.36v16.28c0 .75-.63 1.36-1.4 1.36H6.4c-.77 0-1.4-.6-1.4-1.36V6.36z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.76 20.9v-8.57H7.89v8.58h2.87zm-1.44-9.75c1 0 1.63-.65 1.63-1.48-.02-.84-.62-1.48-1.6-1.48-.99 0-1.63.64-1.63 1.48 0 .83.62 1.48 1.59 1.48h.01zM12.35 20.9h2.87v-4.79c0-.25.02-.5.1-.7.2-.5.67-1.04 1.46-1.04 1.04 0 1.46.8 1.46 1.95v4.59h2.87v-4.92c0-2.64-1.42-3.87-3.3-3.87-1.55 0-2.23.86-2.61 1.45h.02v-1.24h-2.87c.04.8 0 8.58 0 8.58z"
                                                fill="#fff"></path>
                                        </svg></a>
                                        <a href="https://www.facebook.com/" target="_blank"><svg width="29" height="29" class="hk">
                                            <path
                                                d="M23.2 5H5.8a.8.8 0 0 0-.8.8V23.2c0 .44.35.8.8.8h9.3v-7.13h-2.38V13.9h2.38v-2.38c0-2.45 1.55-3.66 3.74-3.66 1.05 0 1.95.08 2.2.11v2.57h-1.5c-1.2 0-1.48.57-1.48 1.4v1.96h2.97l-.6 2.97h-2.37l.05 7.12h5.1a.8.8 0 0 0 .79-.8V5.8a.8.8 0 0 0-.8-.79">
                                            </path>
                                        </svg></a>
                                    </div>
                                </div>
                                <div class="content-blogpost-top">
                                    <img src="/search_engine_by_php/admin/upload/<?php echo $row['post_img']; ?>" alt="iBlog">
                                </div>
                                <div class="content-blogpost-bottom">

                                    <?php echo $row['description']; ?>
                                </div>
                            </div>
                            <?php
                                }
                            } else {
                                echo "<h2>No Record Found.</h2>";
                            }

                            ?>
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