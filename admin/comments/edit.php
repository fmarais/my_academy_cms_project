<?php

// catch the edit get request
if (isset($_GET['id'])) {
    //  query
    $query = "SELECT * FROM comments WHERE comment_id = {$_GET['id']}";
    $query_response = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($query_response)) {
        $comment_id = $row['comment_id'];
        $comment_post_id = $row['comment_post_id'];
        $comment_author = $row['comment_author'];
        $comment_email = $row['comment_email'];
        $comment_content = $row['comment_content'];
        $comment_status = $row['comment_status'];
        $comment_date = $row['comment_date'];
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="comment_author">Comment Post Id</label>
            <input type="text" class="form-control" name="comment_post_id" value="<?php echo $comment_post_id; ?>">
        </div>

        <div class="form-group">
            <label for="comment_author">Comment Author</label>
            <input type="text" class="form-control" name="comment_author" value="<?php echo $comment_author; ?>">
        </div>

        <div class="form-group">
            <label for="comment_email">Comment Email</label>
            <input type="text" class="form-control" name="comment_email" value="<?php echo $comment_email; ?>">
        </div>

        <div class="form-group">
            <label for="comment_content">Comment Content</label>
            <textarea type="text" class="form-control" name="comment_content" id="" cols="30" rows="10">
            <?php echo $comment_content; ?>
        </textarea>
        </div>

        <div class="form-group">
            <label for="comment_status">Comment Status</label>
            <input type="text" class="form-control" name="comment_status" value="<?php echo $comment_status; ?>">
        </div>

        <div class="form-group">
            <label for="comment_date">Comment Date</label>
            <input type="date" class="form-control" name="comment_date" value="<?php echo $comment_date; ?>">
        </div>

        <input name="comment_id" type="hidden" value="<?php echo $comment_id; ?>">

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit-update" value="Publish Comment">
        </div>
    </form>
    <?php

}
?>