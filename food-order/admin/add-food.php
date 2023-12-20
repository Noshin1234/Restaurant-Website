<?php include('partials/menu.php'); ?>


<link rel="stylesheet" href="../css/add-admin.css">
<div class="main-content" style="background-image: url('yellow.jpeg');">
<div class="wrapper" style="background-color: rgba(3000,3000, 3000, 0.7); padding: 20px;">


<h1>Add Food</h1>

<br><br>
<?php
     if(isset($_SESSION['add']))
     {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
     }

     if(isset($_SESSION['upload']))
     {
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
     }


     ?>
     <br><br>

<form action="" method="POST" enctype="multipart/form-data">

    <table class="tbl-30">
        <tr>
            <td>Title: </td>
            <td>
                <input type="text" name="title" placeholder="Category Title">
               </td>
             </tr>  
             
            
            
             <tr>
             <td>Description: </td>
            <td>
                <textarea name="description" cols="30" rows="5" placeholder="Describe the food." ></textarea>
               </td>
             </tr>

             <tr>
             <td>Price: </td>
            <td>
                <input type="number" name="price" >
               </td>
             </tr>

             

             <tr>
                <td>Select Image: </td>
                <td>
                    <input type="file" name="image">
                    </td>
                    </tr>


                    <tr>


             <td>Category: </td>
            <td>
                <select name="category">
                  
                <?php
                     $sql = "SELECT * FROM tbl_catagory WHERE active='Yes'";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            ?>
                           <option value="<?php echo $id; ?>"><?php echo $title; ?></option>


                            <?php
                        }


                    }
                    else
                {
                    ?>
                    <option value="0">No Category Found</option>
                    <?php

                }
                ?>
                </select>
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
                <td> Active:</td>
                <td>
                    <input type="radio" name="active" value ="Yes"> Yes
                    <input type="radio" name="active" value="No">No
             </td>
          </tr>

          <tr>
            <td colspam="2">
                <input type="submit" name="submit" value ="Add Category" class="btn-secondary">
</td>
</tr>

            </table>
            </form>


            <?php



                if(isset($_POST['submit']))
                {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $category= $_POST['category'];
                    
                    if(isset($_POST['featured']) )
                    {
                        $featured = $_POST['featured'];
                    }
                    else
                    {
                        $featured = "NO";

                    }

                    if(isset($_POST['active']))
                    {
                        $active = $_POST['active'];
                    }
                    else
                    {
                        $active = "NO";
                    }

                    //print_r($_FILES['image']);
                    
                    //die();
                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];
                        $ext = end(explode('.', $image_name));
                        $image_name = "Food_Category_".rand(000,999).'.'.$ext;


                        $source_path = $_FILES['image']['tmp_name'];
                         $destination_path = "../images/category/".$image_name;
                         $upload = move_uploaded_file($source_path, $destination_path);

                         if($upload==false)
                         {
                            $_SESSION['upload'] = "<div class='error'>Failed to upload Image. </div>";
                            header('location:'.SITEURL.'admin/add-food.php');
                            die();
                         }
                    }
                      else
                      {
                        $image_name="";
                      }

                    $sql = "INSERT INTO tb_food SET
                    
                        title='$title',
                        description = '$description',
                        price = '$price',
                        image_name = '$image_name',
                        catagory_id = '$category',
                        featured= '$featured',
                        active= '$active'
                    ";



                   $res1 = mysqli_query($conn, $sql);


                   if($res1==true)
                   {
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                   }
                   else
                   {
                    $_SESSION['add'] = "<div class='error'>Failed to add food.</div>";
                    header('location:'.SITEURL.'admin/add-food.php');
                   }


                }
                ?>



</div>
</div>




<?php include('partials/footer.php');  ?>