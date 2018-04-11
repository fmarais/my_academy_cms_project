<?php include 'includes/header.php' ?>

<div id="wrapper">

    <?php include 'includes/navigation.php' ?>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <h1 class="page-header">
                    Welcome to admin
                    <small>Author</small>
                </h1>


                <?php

                if (isset($_GET['source'])) {

                }

                switch ($_GET['source']) {
                    case 'add_post';
                        include "includes/add_post.php";
                        break;

                    default:
                        include "includes/view_all_posts.php";
                        break;
                }

                ?>

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        <?php include 'includes/footer.php' ?>
