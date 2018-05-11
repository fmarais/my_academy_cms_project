<?php

function deleteComment() {
    global $connection;

    if (isset($_GET['delete'])) {
        $query = "DELETE FROM comment WHERE comment_id = {$_GET['delete']}";
        $result = mysqli_query($connection, $query);

        header("Location: comments.php"); // refresh page to instantly show delete change
        confirmQuery($result);
    }
}

function insertComment() {
    global $connection;

    if (isset($_POST['submit-insert'])) {
        // set default timezone for dates TODO: move out to central place
        date_default_timezone_set('UTC');

        $query = "INSERT INTO comments (";
        $query .= "comment_post_id,";
        $query .= "comment_author,";
        $query .= "comment_email,";
        $query .= "comment_content,";
        $query .= "comment_status,";
        $query .= "comment_date";
        $query .= ") ";

        $query .= "VALUES (";
        $query .= "'{$_POST['comment_post_id']}',";
        $query .= "'{$_POST['comment_author']}',";
        $query .= "'{$_POST['comment_email']}',";
        $query .= "'{$_POST['comment_content']}',";
        $query .= "'{$_POST['comment_status']}',";
        $query .= "'{$_POST['comment_date']}'";
        $query .= ")";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
    }
}

//function getCategoryForPostId($post_id) {
//    global $connection;
//
//    $query = "SELECT * FROM categories WHERE cat_id = {$post_id}";
//    return $query_response = mysqli_query($connection, $query);
//}

function getCommentForCommentId($post_id) {
    global $connection;

    $query = "SELECT * FROM comments WHERE comment_id = {$post_id}";
    return $query_response = mysqli_query($connection, $query);
}

function updateComment() {
    global $connection;

    // catch the post request to update the post
    if (isset($_POST['submit-update'])) {
        // update query
        $query = "UPDATE comments SET ";
        $query .= "comment_post_id = '{$_POST['comment_post_id']}', ";
        $query .= "comment_author = '{$_POST['comment_author']}', ";
        $query .= "comment_email = '{$_POST['comment_email']}', ";
        $query .= "comment_content = '{$_POST['comment_content']}', ";
        $query .= "comment_status = '{$_POST['comment_status']}', ";
        $query .= "comment_date = '{$_POST['comment_date']}' ";
        $query .= "WHERE comment_id = {$_POST['comment_id']} ";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
    }
}

?>