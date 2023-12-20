<link rel="stylesheet" href="../css/add-admin.css">;
<?php

include('../config/constraints.php');

 $id = $_GET['id'];
$sql = "DELETE FROM tbl_admin WHERE id =$id";
$res = mysqli_query($conn, $sql);
if($res==true)
{
    //echo "Admin Deleted";
    $_SESSION['delete']="<div class='success'>Admin Deleted Successfully.</div>";
    header('location:'.SITEURL.'admin/manage_admin.php');

}
else 
{
   $_SESSION['delete']= "<div class= 'error'>Failed to Delete Admin. Try Again  Later.</div>";
   header('location:'.SITEURL.'admin/manage_admin.php');

}


?>