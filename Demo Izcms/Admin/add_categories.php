<?php include ('../fontend/header.php');?>
<?php include('sidebar-admin.php');?>
<?php include ('../fontend/connect_sql.php'); ?>


<?php


?>

<?php
$errors = array();
    if (empty($_POST['category'])){
        $errors[] = "category";
    }else {
        $cat_name = $_POST['category'];
    }

    if (isset($_POST['position'])){
        $position = $_POST['position'];
    }else {
        $errors[] = "position";
    }


    if (!empty($errors)) {
        echo "Please fill all the required fields";
    } else {
        $sql = "INSERT INTO categories(user_id, cat_name, position ) VALUES ('1', '$cat_name', $position)";

        if ($conn->query($sql) === TRUE) {
            $messages = "<p class='success'>The category was added successfully.</p>";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

$conn->close();
?>



<div id="content">
    <h2>Create a category</h2>

    <form id="add_cat" action="" method="post">
        <fieldset>
            <legend>Add category</legend>
            <div>
                <label for="category">Category Name: <span class="required">*</span> </label>
                <input type="text" name="category" id="category" value="" size="20" maxlength="111 tabidex"1"/>
            </div>
            <div>
                <label for="position">Position: <span class="required">*</span> </label>
                <select name="position" tabindex="2" >
                    <option value="1">1</option>
                </select>
            </div>
        </fieldset>
        <p><input type="submit" name="submit" value="Add Category"></p>
    </form>


</div>

<?php include ('../fontend/sidebar-b.php');?>
<?php include ('../fontend/footer.php');?>
