<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>
<?php include 'includes/db.php' ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php

            $search = $_POST['search'];
            $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
            $query_response = mysqli_query($connection, $query);

            if (mysqli_num_rows($query_response) > 0) {
                if (isset($_POST['submit'])) {
                    while ($row = mysqli_fetch_assoc($query_response)) {
                        ?>

                        <h1 class="page-header">
                            <?php echo $row['post_title'] ?>
                            <small>Secondary Text</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $row['post_title'] ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $row['post_author'] ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['post_date'] ?></p>
                        <hr>

                        <img class="img-responsive" src="images/<?php echo $row['post_image'] ?>" alt="">

                        <hr>
                        <p><?php echo $row['post_content'] ?></p>
                        <a class="btn btn-primary" href="#">Read More <span
                                    class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                        <?php

                    }
                }
            } else {
                echo "No items found for: " . $search;
            }
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
