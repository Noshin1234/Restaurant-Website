<?php include('partials/menu.php'); ?>
<link rel="stylesheet" href="../css/add-admin.css">
<div class="main-content" style="background-image: url('yellow.jpeg');">
<div class="wrapper" style="background-color: rgba(3000,3000, 3000, 0.7); padding: 20px;">
<h1>Update Category</h1>
<br><br>

<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_catagory WHERE id=$id";
    $res = mysqli_query($conn, $sql);
}
else
{
    header('location:'.SITEURL.'admin/manage-category.php');
}



?>

<form action="" method="POST" enctype="multipart/form-data">

    <table class="tbl-30">
        <tr>
            <td>Title: </td>
            <td>
                <input type="text" name="title" placeholder="Category Title">
               </td>
             </tr>
             <tr>
                <td> Featured:</td>
                <td>
                    <input type="radio" name="featured" value ="Yes"> Yes
                    <input type="radio" name="freatured" value="No">No
             </td>
          </tr>

          <tr>
            <td>Current Image: </td>
            <td>
                 The image will be updated
               </td>
             </tr>
          
            <tr>
                <td>New Image: </td>
                <td>
                    <input type="file" name="New image">
                    </td>
                    </tr>

          <tr>
                <td> Active:</td>
                <td>
                    <input type="radio" name="active" value ="Yes"> Yes
                    <input type="radio" name="active" value="No">No
             </td>
          </tr>

          <tr>
            <td colspam="2">
                <input type="submit" name="submit" value ="Update Category" class="btn-secondary">
</td>
</tr>

            </table>
            </form>



<?php include('partials/footer.php');  ?>
