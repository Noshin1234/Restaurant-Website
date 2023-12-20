<?php include('partials/menu.php');  ?>
<div class="main-content" style="background-image: url('yellow.jpeg');">
<div class="wrapper" style="background-color: rgba(3000,3000, 3000, 0.7); padding: 20px;">

            <h1>Manage Food</h1>
            <br/>  <br/>
           

            <?php

     if(isset($_SESSION['add']))
     {
        echo$_SESSION['add'];
        unset($_SESSION['add']);
        
     }
     if(isset($_SESSION['remove'])){
      echo$_SESSION['remove'];
      unset($_SESSION['remove']);
     }
     if(isset($_SESSION['delete'])){
      echo$_SESSION['delete'];
      unset($_SESSION['delete']);
     }
     ?>
     <br><br>
            <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>
            <br/><br/><br/>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th> Title</th>
                    <th> Description</th>
                    <th> Price</th>
                    <th> Image</th>
                    <th> Catagory</th>
                    <th> Featured</th>
                    <th> Active</th>
                    <th>Actions</th>
    
              </tr>
              <?php
                   $sql = "SELECT * FROM tbl_food";
                   $res = mysqli_query($conn, $sql);
                   $count = mysqli_num_rows($res);
                   $sn=1;
                    if($count>0)
                    {
                      while($row=mysqli_fetch_assoc($res))
                      {
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        $category_id = $row['category_id'];
                        $featured= $row['featured'];
                        $active= $row['active'];
                            
                        ?>

<tr>
                <td><?php echo $sn++; ?>  </td>
                <td> <?php echo $title; ?></td>
                <td> <?php echo $description; ?></td>
                <td> <?php echo $price; ?></td>
                <td> 
                  <?php
                   if($image_name!="")
                   {
                    ?>

                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="150px">

                    <?php

                   }
                   else
                   {
                      echo "<div class='error'>Image not found</div>";

                   }

                   ?>
                
                </td>
                <td><?php echo $category_id; ?></td>
                <td><?php echo $featured; ?></td>
                <td><?php echo $active; ?></td>
                <td>
                
                    
                    <a href="<?php echo SITEURL; ?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Food</a>
                    
                </td>
              </tr>

                        <?php


                      }

                    }
                    else{
                      ?>
                      <tr>
                        <td colspan="6"><div class="error">No Food Added.</div></td>
                    </tr>
                    <?php

                    }

                   ?>
             
             

             
              
             </table>



            

             

             
           </div>

              
            </div>


<?php include('partials/footer.php');  ?> 


