<?php

function insertCategory() {
    global $connection;
    ?>

    <form action="" method="post">
        <label for="cat-title">Add Category</label>
        <div class="form-group">
            <input name="cat_title" type="text" class="form-control">
        </div>

        <div class="form-group">
            <input class="btn btn-primary" name="submit-insert" type="submit" value="Add Category">
        </div>
    </form>

    <?php

    if (isset($_POST['submit-insert'])) {
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
}

function getCategories() {
    global $connection;

    $query = "SELECT * FROM categories";
    $query_response = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($query_response)) {
        ?>
        <tr>
            <td><?php echo $row['cat_id'] ?></td>
            <td><?php echo $row['cat_title'] ?></td>
            <td><a href="categories.php?delete=<?php echo $row['cat_id'] ?>">Delete</a></td>
            <td><a href="categories.php?edit=<?php echo $row['cat_id'] ?>">Edit</a></td>
            </td>
        </tr>
        <?php

    }
}

function editCategoryPost() {
    global $connection;

    if (isset($_POST['submit-update'])) {
        $query = "UPDATE categories SET ";
        $query .= "cat_title = '{$_POST['cat_title']}' ";
        $query .= "WHERE cat_id = {$_POST['cat_id']} ";

        $query_response = mysqli_query($connection, $query);
        confirmQuery($query_response);
    }
}

function editCategoryGet() {
    global $connection;

    if (isset($_GET['edit'])) {
        ?>
        <!-- submit back to same page-->
        <form action="categories.php" method="post" style="display: block">
            <label for="cat-title">Edit Category</label>
            <div class="form-group">

                <?php

                $query = "SELECT * FROM categories WHERE cat_id = {$_GET['edit']}";
                $query_response = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($query_response)) {
                    echo "<input name='cat_id' type='hidden' value='{$row['cat_id']}'>";
                    echo "<input name='cat_title' type='text' class='form-control' value='{$row['cat_title']}'>";
                }
                ?>

            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="submit-update" type="submit" value="Update Category">
            </div>
        </form>
        <?php

    }
}

function deleteCategory() {
    global $connection;

    if (isset($_GET['delete'])) {
        $query = "DELETE FROM categories WHERE cat_id = {$_GET['delete']} ";
        $result = mysqli_query($connection, $query);

        header("Location: categories.php"); // refresh page to instantly show delete change

        if (!$result) {
            die(mysqli_error($result));
        } else {
            echo 'Removed: ' . $_GET['delete'];
        }
    }
}