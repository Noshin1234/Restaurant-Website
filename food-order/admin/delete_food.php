<?php
include('../config/constraints.php');
if(isset($_GET['id'])AND isset($_GET['image_name']))
{
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];
     if($image_name != "")
     {
        $path = "../images/category/".$image_name;
        $remove = unlink($path);
        if($remove==false)
        {
            $_SESSION['remove'] = "<div class='error'>Failed to remove Category Image.</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
            die();
        }
     }
     $sql = "DELETE FROM tb_food WHERE id=$id";
     $res= mysqli_query($conn, $sql);

     if($res==true){
        $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');

     }
     else
     {

        $_SESSION['delete'] = "<div class='error'>failed to delete category.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');


     }


}