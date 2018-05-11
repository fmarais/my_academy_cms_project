<form action="/admin/comments.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="comment_post_id">Comment Post Id</label>
        <input type="text" class="form-control" name="comment_post_id">
    </div>

    <!--    <div class="form-group">-->
    <!--        <select name="comment_category" id="comment_category">-->
    <!--            --><?php
    //
    //            // get categories
    //            $query_categories = "SELECT * FROM categories";
    //            $query_response_categories = mysqli_query($connection, $query_categories);
    //
    //            while ($row = mysqli_fetch_assoc($query_response_categories)) {
    //                echo "<option value='{$row['cat_id']}'>{$row['cat_title']}</option>";
    //            }
    //            ?>
    <!--        </select>-->
    <!--    </div>-->

    <div class="form-group">
        <label for="comment_author">Comment Author</label>
        <input type="text" class="form-control" name="comment_author">
    </div>

    <div class="form-group">
        <label for="comment_email">Comment Email</label>
        <input type="text" class="form-control" name="comment_email">
    </div>

    <div class="form-group">
        <label for="comment_content">Comment Content</label>
        <textarea type="text" class="form-control" name="comment_content" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="comment_status">Comment Status</label>
        <input type="text" class="form-control" name="comment_status">
    </div>

    <div class="form-group">
        <label for="comment_date">Comment Date</label>
        <input type="date" class="form-control" name="comment_date">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit-insert" value="Publish Comment">
    </div>
</form>