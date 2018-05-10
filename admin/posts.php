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

                // get source
                $source = null;
                if (isset($_GET['source'])) {
                    $source = $_GET['source'];
                }

                // handle delete
                deletePost();

                // handle update
                updatePost();

                // handle insert
                insertPost();

                switch ($source) {
                    case 'add_post';
                        include "posts/add_post.php";
                        break;

                    case 'edit_post';
                        include "posts/edit_post.php";
                        break;

                    default:
                        include "posts/all_posts.php";
                        break;
                }

                ?>

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        <?php include 'includes/footer.php' ?>
