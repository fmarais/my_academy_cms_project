<!-- read edit button response and populate form for matching category -->
<form action="" method="post" style="display: block">
<label for="cat-title">Edit Category</label>
<div class="form-group">

    <?php

        $query = "SELECT * FROM categories WHERE cat_id = {$_GET['edit']}";

        $result_edit = mysqli_query($connection, $query);
        if (!$result_edit) {
            die(mysqli_error($result_edit));
        }

        while ($row = mysqli_fetch_assoc($result_edit)) {
            ?>
            <input name="cat_id" type="hidden" value="<?php echo $row['cat_id'] ?>">

            <input name="cat_title" type="text" class="form-control"
                   value="<?php echo $row['cat_title'] ?>">

            <?php

        }
    ?>
</div>

<div class="form-group">
    <input class="btn btn-primary" name="submit-update" type="submit" value="Update Category">
</div>
</form>

<!-- ============= -->

<!-- read edit form response here and update matching category -->
<?php

if (isset($_POST['submit-update'])) {
    $query = "UPDATE categories SET ";
    $query .= "cat_title = '{$_POST['cat_title']}' ";
    $query .= "WHERE cat_id = {$_POST['cat_id']} ";
    $result_update = mysqli_query($connection, $query);

    if (!$result_update) {
        die(mysqli_error($result_update));
    } else {
        echo "Update success!";
    }
}
?>