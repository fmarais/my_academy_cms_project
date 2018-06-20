<div class="col-xs-6">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Post Id</th>
            <th>Author</th>
            <th>Email</th>
            <th>Content</th>
            <th>Status</th>
            <th>Date</th>
            <th>In Response To</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $query = "SELECT * FROM comments";
        $query_response = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($query_response)) {
            echo "<tr>";
            echo "<td> {$row['comment_id']}</td>";
            echo "<td> {$row['comment_post_id']}</td>";
            echo "<td> {$row['comment_author']}</td>";
            echo "<td> {$row['comment_email']}</td>";
            echo "<td> {$row['comment_content']}</td>";
            echo "<td> {$row['comment_status']}</td>";
            echo "<td> {$row['comment_date']}</td>";

            echo "<td><a href='/post.php?p_id={$row['comment_post_id']}'>View Post</a></td>";

            echo "<td><a href='/admin/comments.php?delete={$row['comment_id']}'>Delete</a></td>";
            echo "<td><a href='/admin/comments.php?source=edit&id={$row['comment_id']}'>Edit</a></td>";
            echo "<td><a href='/admin/comments.php?source=view&id={$row['comment_id']}'>View</a></td>";
            echo "<td><a href='/admin/comments.php?source=add'>Add</a></td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
</div>
