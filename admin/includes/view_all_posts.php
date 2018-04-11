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
            ?>
            <tr>
                <td><?php echo $row['post_id'] ?></td>
                <td><?php echo $row['post_author'] ?></td>
                <td><?php echo $row['post_title'] ?></td>
                <td><?php echo $row['post_category_id'] ?></td>
                <td><?php echo $row['post_status'] ?></td>
                <td>
                    <img class="img-responsive" src="/images/<?php echo $row['post_image'] ?>" alt="">
                </td>
                <td><?php echo $row['post_tags'] ?></td>
                <td><?php echo $row['post_comment_count'] ?></td>
                <td><?php echo $row['post_date'] ?></td>
            </tr>

            <?php

        }
        ?>

        </tbody>
    </table>
</div>
