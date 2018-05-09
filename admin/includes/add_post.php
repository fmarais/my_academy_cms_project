<?php

if (isset($_POST['create_post'])) {
    // set default timezone for dates TODO: move out to central place
    date_default_timezone_set('UTC');

    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    $post_date = date('d-m-y');

    $post_comment_count = 4;
    $post_category_id = 48;
    $post_user = 'user';
    $post_views_count = 1;

    // copy uploaded file to webserver
    move_uploaded_file($post_image_temp, "../images/$post_image");

    // insert query
    $query = "INSERT INTO posts (post_category_id,post_title,post_author,post_date,"
        . "post_image,post_content,post_tags,"
        . "post_comment_count,post_status,post_user,post_views_count) ";

    $query .= "VALUES ("
        . "'{$post_category_id}','{$_POST['post_title']}','{$_POST['post_author']}','$post_date()',"
        . "'$post_image','{$_POST['post_content']}','{$_POST['post_tags']}',"
        . "'{$post_comment_count}','{$_POST['post_status']}','{$post_user}','{$post_views_count}'"
        . ")";

    $query_response = mysqli_query($connection, $query);
    confirm_update($query_response);
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_title">Post Title</label>
        <input type="text" class="form-control" name="post_title">
    </div>

    <div class="form-group">
        <label for="post_category_id">Post Category Id</label>
        <input type="text" class="form-control" name="post_category_id">
    </div>

    <div class="form-group">
        <label for="post_author">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>

    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>

    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" class="form-control" name="post_image">
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>
</form>