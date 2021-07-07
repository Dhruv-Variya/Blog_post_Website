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
                            if (isset($_GET['search'])) {
                                $search_term = mysqli_real_escape_string($con, $_GET['search']);
                            }
                            ?>
                            <h2 class="page-heading">Search : <?php echo $search_term; ?></h2>
                            <?php
                            $limit = 4;
                            $sql = "SELECT * FROM post WHERE post.title LIKE '%{$search_term}%' OR post.description LIKE '%{$search_term}%' OR post.post_author LIKE '%{$search_term}%' ORDER BY post.post_id DESC LIMIT {$limit}";

                            $result = mysqli_query($con, $sql) or die("Query Failed.");
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="post-content">
                                <div class="row-1">
                                    <div class="col-2">
                                        <a class="post-img" href='blogpost.php?id=<?php echo $row['post_id']; ?>'><img
                                                src="/search_engine_by_php/admin/upload/<?php echo $row['post_img']; ?>" alt="" /></a>
                                    </div>
                                    <div class="col-1">
                                        <div class="inner-content clearfix">
                                            <h3>
                                                <a
                                                    href='blogpost.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a>
                                            </h3>
                                            <div class="post-information">
                                                <span>
                                                    <?php echo $row['post_author']; ?>
                                                </span>
                                                <span>
                                                    <?php echo $row['post_date']; ?>
                                                </span>
                                            </div>
                                            <p class="description">
                                                <?php echo substr($row['description'], 0, 130) . "..."; ?>
                                            </p>
                                        </div>
                                    </div>

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