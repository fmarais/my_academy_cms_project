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
                        <?php insert_categories(); ?>
                        <!-- form submit - end -->

                        <!-- ========================== -->

                        <!-- edit form - start -->
                        <?php if (isset($_GET['edit'])) {
                            include "includes/update_categories.php";
                        } ?>

                    </div>

                    <!-- ========================== -->

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php findAllCategories() ?>
                            </tbody>
                        </table>

                        <!-- delete - start -->
                        <?php deleteCategory(); ?>
                        <!-- delete - end -->
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        <?php include 'includes/footer.php' ?>
