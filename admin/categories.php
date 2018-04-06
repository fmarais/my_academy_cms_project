<?php include 'includes/header.php' ?>

<div id="wrapper">

    <?php include 'includes/navigation.php' ?>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to admin
                        <small>Subheading</small>
                    </h1>


                    <div class="col-xs-6">
                        <form action="" method="post">
                            <label for="cat-title">Add Category</label>
                            <div class="form-group">
                                <input name="cat_title" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" name="submit" type="submit" value="Add Category">
                            </div>
                        </form>

                        <!-- form submit - start -->
                        <?php

                        if (isset($_POST['submit'])) {
                            if ($_POST['cat_title'] == "" || empty($_POST['cat_title'])) {
                                echo "Invalid input, please try again";
                            } else {
                                $query = "INSERT INTO categories(cat_title) ";
                                $query .= "VALUE('{$_POST['cat_title']}') ";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die(mysqli_error($result));
                                }
                            }
                        }
                        ?>
                        <!-- form submit - end -->
                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $query = "SELECT * FROM categories";
                            $query_response = mysqli_query($connection, $query);
                            
                            while ($row = mysqli_fetch_assoc($query_response)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['cat_id'] ?></td>
                                    <td><?php echo $row['cat_title'] ?></td>
                                </tr>
                                <?php

                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


        <?php include 'includes/footer.php' ?>
