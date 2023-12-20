<?php include('partials/menu.php'); ?>
<link rel="stylesheet" href="../css/add-admin.css">
<div class="main-content" style="background-image: url('tyu.jpg');">
    <div class="wrapper" style="background-color: rgba(3000,3000, 3000, 0.7); padding: 20px;">
        <h1>Update Category</h1>
        <br><br>
        <?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Validate and sanitize input
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $title = isset($_POST['title']) ? mysqli_real_escape_string($conn, $_POST['title']) : '';
    $featured = isset($_POST['featured']) ? $_POST['featured'] : 'No'; // Default to 'No' if not set
    $active = isset($_POST['active']) ? $_POST['active'] : 'No'; // Default to 'No' if not set

    $sql = "UPDATE tbl_category SET title='$title', featured='$featured', active='$active' WHERE id=$id";

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Category updated successfully.";
        // Redirect to the category management page or any other desired location
        header('location: ' . SITEURL . 'admin/manage-category.php');
        exit();
    } else {
        echo "Failed to update category. Please try again.";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_category WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
        $current_image = $row['image_name'];
        $featured = $row['featured'];
        $active = $row['active'];
    } else {
        $_SESSION['no-category-found'] = "<div class='error'>Category not Found.</div>";
        header('location: ' . SITEURL . 'admin/manage-category.php');
        exit(); // Make sure to exit after a header redirect
    }
} else {
    header('location: ' . SITEURL . 'admin/manage-category.php');
    exit(); // Make sure to exit after a header redirect
}
?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Category Title">
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes" <?php if ($featured == 'Yes') echo 'checked'; ?>> Yes
                        <input type="radio" name="featured" value="No" <?php if ($featured == 'No') echo 'checked'; ?>> No
                    </td>
                </tr>

                <tr>
                    <td>Current Image: </td>
                    <td>
                        <?php
                        if ($current_image != "") {
                            // Display the current image
                            echo "<img src='" . SITEURL . "images/category/" . $current_image . "' width='100px'>";
                        } else {
                            echo "Image not added.";
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>New Image: </td>
                    <td>
                        <input type="file" name="new_image">
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes" <?php if ($active == 'Yes') echo 'checked'; ?>> Yes
                        <input type="radio" name="active" value="No" <?php if ($active == 'No') echo 'checked'; ?>> No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

<?php include('partials/footer.php'); ?>
