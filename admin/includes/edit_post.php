<?php

// catch the edit post get request
if (isset($_GET['p_id'])) {
    $id = $_GET['p_id'];

    //  query
    $query = "SELECT * FROM posts WHERE post_id = {$id}";
    $query_response = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($query_response)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_status = $row['post_status'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];

        $post_image = $row['post_image'];
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="post_title">Post Title</label>
            <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
        </div>

        <div class="form-group">
            <select name="post_category" id="post_category">
                <?php

                // get categories
                $query_categories = "SELECT * FROM categories";
                $query_response_categories = mysqli_query($connection, $query_categories);
                confirmQuery($query_response_categories);

                while ($row = mysqli_fetch_assoc($query_response_categories)) {
                    echo "<option value='{$row['cat_id']}'>{$row['cat_title']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="post_author">Post Author</label>
            <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
        </div>

        <div class="form-group">
            <label for="post_status">Post Status</label>
            <input value="<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
        </div>

        <div class="form-group">
            <label for="post_image">Post Image</label>
            <input type="file" class="form-control" name="post_image">

            <img width="100" src="../images/<?php echo $post_image; ?>">
        </div>

        <div class="form-group">
            <label for="post_tags">Post Tags</label>
            <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
        </div>

        <div class="form-group">
            <label for="post_content">Post Content</label>
            <textarea type="text" class="form-control" name="post_content" id="" cols="30"
                      rows="10"><?php echo $post_content; ?></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
        </div>
    </form>
    <?php

}
?>

<!-- ============================== -->

<?php

// catch the post request to update the post
if (isset($_POST['update_post'])) {
    $post_author = $_POST['post_author'];
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_content = $_POST['post_content'];
    $post_tags = $_POST['post_tags'];

    move_uploaded_file($post_image_temp, "../images/$post_image");
}
?>
