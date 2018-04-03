<?php include 'includes/db.php' ?>

<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>

        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">

                <span class="input-group-btn">
                    <button class="btn btn-default" name="submit" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">

        <?php

        $query = "SELECT * FROM categories";
        $query_response = mysqli_query($connection, $query);
        ?>

        <h4>Blog Categories</h4>
        <div class="row">


            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php

                    while ($row = mysqli_fetch_assoc($query_response)) {
                        ?>

                        <li><a href="#"><?php echo $row['cat_title'] ?></a></li>

                        <?php

                    }
                    ?>
                </ul>
            </div>


        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php include 'includes/widget.php' ?>

</div>