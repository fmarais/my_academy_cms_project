<?php

while ($row = mysqli_fetch_assoc($query_response)) {
    $post_content = $row['post_content'];
// TODO: limit text in video, db data does not support this
//                $post_content = substr($post_content, 0, 10);
    ?>

    <h1 class="page-header">
        <?php echo $row['post_title'] ?>
        <small>Secondary Text</small>
    </h1>

    <!-- First Blog Post -->
    <h2>
        <a href="/post.php?p_id=<?php echo $row['post_id'] ?>"><?php echo $row['post_title'] ?></a>
    </h2>

    <p class="lead">
        by <a href="index.php"><?php echo $row['post_author'] ?></a>
    </p>

    <img class="img-responsive" src="images/<?php echo $row['post_image'] ?>" alt="">

    <hr>
    <p><?php echo $post_content ?></p>

    <a class="btn btn-primary" href="#">Read More <span
                class="glyphicon glyphicon-chevron-right"></span></a>

    <br>
    <br>

    <!-- handle the form post comment insert -->
    <?php insertComment(); ?>
    <!-- comments -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        <form action="" method="post" role="form">

            <div class="form-group">
                <label for="comment_author">Author</label>
                <input type="text" class="form-control" name="comment_author">
            </div>

            <div class="form-group">
                <label for="comment_email">Email</label>
                <input type="email" class="form-control" name="comment_email">
            </div>

            <div class="form-group">
                <label for="comment_content">Comment</label>
                <textarea class="form-control" rows="3" name="comment_content"></textarea>
            </div>

            <input name="comment_post_id" type="hidden" value="<?php echo $row['post_id']; ?>">
            <button type="submit" class="btn btn-primary" name="submit-insert">Submit</button>
        </form>
    </div>

    <hr>


    <?php

    // comments list for post
    $query_response2 = getCommentsForPostId($row['post_id']);
    while ($row2 = mysqli_fetch_assoc($query_response2)) {
        if ($row2['comment_status'] === 'approved') {
            ?>
            <p>
                by <?php echo $row2['comment_author'] ?>
                <?php echo $row2['comment_content'] ?>
            </p>

            <?php

        }
    }
}
?>