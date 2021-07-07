<div id="sidebar" class="col-2">

    <div class="recent-post-container">
        <h4>Recent Uploaded Articles</h4>
        <?php
        include "config.php";

        /* Calculate Offset Code */
        $limit = 6;

        $sql = "SELECT post.post_id, post.title, post.post_date,post.post_author,
        post.post_img FROM post ORDER BY post.post_id DESC LIMIT {$limit}";

        $result = mysqli_query($con, $sql) or die("Query Failed. : Recent Post");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="recent-post">
            <a class="post-img" href='blogpost.php?id=<?php echo $row['post_id']; ?>'>
                <img src="/search_engine_by_php/admin/upload/<?php echo $row['post_img']; ?>" alt="" />
            </a>
            <div class="post-content">
                <a href='blogpost.php'>
                    <a href='blogpost.php?id=<?php echo $row['post_id']; ?>'>
                        <h5><?php echo $row['title']; ?></h5>
                    </a>
                </a>
                <span><?php echo $row['post_author']; ?></span>
                <span><?php echo $row['post_date']; ?></span>
                <!-- <a class="read-more" href="blogpost.php">read more</a> -->
            </div>
        </div>
        <?php
            }
        }
        ?>

    </div>
</div>