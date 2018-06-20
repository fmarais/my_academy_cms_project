<?php

date_default_timezone_set('UTC');

function deleteComment() {
    global $connection;

    if (isset($_GET['delete'])) {
        $query = "DELETE FROM comments WHERE comment_id = {$_GET['delete']}";
        $result = mysqli_query($connection, $query);

        header("Location: comments.php"); // refresh page to instantly show delete change
        confirmQuery($result);
    }
}

function insertComment() {
    global $connection;

    if (isset($_POST['submit-insert'])) {
        $date = date('Y-m-d');
        $status = 'unapproved';

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
        $query .= "'{$status}',";
        $query .= "'{$date}'";
        $query .= ")";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
        $_POST = null;
    }
}

function getCommentForCommentId($comment_id) {
    global $connection;

    $query = "SELECT * FROM comments WHERE comment_id = {$comment_id}";
    return $query_response = mysqli_query($connection, $query);
}

function getCommentsForPostId($post_id) {
    global $connection;

    $query = "SELECT * FROM comments WHERE comment_post_id = {$post_id}";
    return $query_response = mysqli_query($connection, $query);
}

function getApproveComment() {
    global $connection;

    if (isset($_GET['approve'])) {
        $query = "SELECT * FROM comments WHERE comment_id = {$_GET['approve']}";
        $query_response = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($query_response)) {
        }
    }
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

function approveComment() {
    global $connection;

    // catch the post request to update the post
    if (isset($_GET['approve'])) {
        // update query
        $query = "UPDATE comments SET ";
        $query .= "comment_status = 'approved' ";
        $query .= "WHERE comment_id = {$_GET['approve']} ";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
    }
}

function unApproveComment() {
    global $connection;

    // catch the post request to update the post
    if (isset($_GET['unapprove'])) {
        // update query
        $query = "UPDATE comments SET ";
        $query .= "comment_status = 'unapproved' ";
        $query .= "WHERE comment_id = {$_GET['unapprove']} ";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
    }
}

?>