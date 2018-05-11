<div class="col-md-8">

    <?php

    $query_response = getCommentForCommentId($_GET['id']);
    while ($row = mysqli_fetch_assoc($query_response)) {
        ?>

        <h1 class="page-header">
            <?php echo $row['comment_author'] ?>
            <small>Secondary Text</small>
        </h1>

        <!-- First Blog Post -->
        <h2>
            <a href="#"><?php echo $row['comment_email'] ?></a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo $row['comment_author'] ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['comment_date'] ?></p>
        <hr>

        <hr>
        <p><?php echo $row['comment_content'] ?></p>
        <a class="btn btn-primary" href="#">Read More <span
                    class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php

    }
    ?>

</div>