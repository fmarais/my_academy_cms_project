<div class="col-md-8">

    <?php

    $query_response = getPostForPostId($_GET['id']);
    while ($row = mysqli_fetch_assoc($query_response)) {
        ?>

        <h1 class="page-header">
            <?php echo $row['post_title'] ?>
            <small>Secondary Text</small>
        </h1>

        <!-- First Blog Post -->
        <h2>
            <a href="#"><?php echo $row['post_title'] ?></a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo $row['post_author'] ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['post_date'] ?></p>
        <hr>

        <img class="img-responsive" src="../images/<?php echo $row['post_image'] ?>" alt="">

        <hr>
        <p><?php echo $row['post_content'] ?></p>
        <a class="btn btn-primary" href="#">Read More <span
                    class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php

    }
    ?>

</div>