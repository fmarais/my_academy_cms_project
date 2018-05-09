<div class="col-xs-6">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Author</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Image</th>
            <th>Tags</th>
            <th>Comments</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $query = "SELECT * FROM posts";
        $query_response = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($query_response)) {
            echo "<tr>";
            echo "<td> {$row['post_id']}</td>";
            echo "<td> {$row['post_author']}</td>";
            echo "<td> {$row['post_title']}</td>";
            echo "<td> {$row['post_category_id']}</td>";
            echo "<td> {$row['post_status']}</td>";
            echo "<td><img class='img-responsive' src='/images/{$row['post_image']}' alt=''></td>";
            echo "<td> {$row['post_tags']}</td>";
            echo "<td> {$row['post_comment_count']}</td>";
            echo "<td> {$row['post_date']}</td>";

            echo "<td><a href='posts.php?source=edit_post&p_id={$row['post_id']}'>Edit</a></td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>
</div>
