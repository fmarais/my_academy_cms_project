<?php

function deletePost() {
    global $connection;

    if (isset($_GET['delete'])) {
        $query = "DELETE FROM posts WHERE post_id = {$_GET['delete']}";
        $result = mysqli_query($connection, $query);

        header("Location: posts.php"); // refresh page to instantly show delete change
        confirmQuery($result);
    }
}

function insertPost() {
    global $connection;

    if (isset($_POST['submit-insert'])) {
        // set default timezone for dates TODO: move out to central place
        date_default_timezone_set('UTC');

        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
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
        confirmQuery($query_response);
    }
}

function getCategoryForPostId($post_id) {
    global $connection;

    $query = "SELECT * FROM categories WHERE cat_id = {$post_id}";
    return $query_response = mysqli_query($connection, $query);
}

function getPostForPostId($post_id) {
    global $connection;

    $query = "SELECT * FROM posts WHERE post_id = {$post_id}";
    return $query_response = mysqli_query($connection, $query);
}

function updatePost() {
    global $connection;

    // catch the post request to update the post
    if (isset($_POST['submit-update'])) {
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        // copy uploaded file to webserver
        move_uploaded_file($post_image_temp, "../images/$post_image");

        // update query
        $query = "UPDATE posts SET ";
        $query .= "post_author = '{$_POST['post_author']}', ";
        $query .= "post_title = '{$_POST['post_title']}', ";
        $query .= "post_category_id = '{$_POST['post_category']}', ";
        $query .= "post_status = '{$_POST['post_status']}', ";
        $query .= "post_content = '{$_POST['post_content']}', ";
        $query .= "post_image = '{$post_image}', ";
        $query .= "post_tags = '{$_POST['post_tags']}' ";
        $query .= "WHERE post_id = {$_POST['post_id']} ";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
    }
}

?>