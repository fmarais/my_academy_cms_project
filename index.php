<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>
<?php include 'includes/db.php' ?>
<?php include 'admin/comments/functions_comments.php' ?>
<?php include 'admin/posts/functions_posts.php' ?>
<?php include 'admin/functions.php' ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php

            $query = "SELECT * FROM posts";
            $query_response = mysqli_query($connection, $query);
            include 'includes/post.php';
            ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include 'includes/sidebar.php' ?>

    </div>
    <!-- /.row -->
    <hr>
    <!-- Footer -->
    <?php include 'includes/footer.php' ?>
</div>
<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
