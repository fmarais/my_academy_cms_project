<?php

function confirmQuery($query_response) {
    global $connection;

    if (!$query_response) {
        die(mysqli_error($connection));
    } else {
        echo "Ok! <br>";
    }
}

function insertCategories() {
    global $connection;

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
}

function findAllCategories() {
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

?>