<?php include('partials/footer_font.php');  ?>
           
<div class="main-content" style="background-image: url('yellow.jpeg');">
<div class="wrapper" style="background-color: rgba(3000,3000, 3000, 0.7); padding: 20px;">
            <h1>Customer Registration</h1>
<br/>  
          <?php
         
         if(isset($_SESSION['add']))
         {
           echo $_SESSION['add'];
           unset($_SESSION['add']);
         }
         if(isset($_SESSION['delete']))
         {
           echo $_SESSION['delete'];
           unset($_SESSION['delete']);
         }

         if(isset($_SESSION['update']))
         {
           echo $_SESSION['update'];
           unset($_SESSION['update']);
         }


          ?>
          <br><br><br>
            <a href="add-customer.php" class="btn-primary">Register Now</a>
            <br/><br/><br/>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th> Full Name</th>
                    <th> Username</th>
                    
    
              </tr>
              <?php
                 $sql = "SELECT* FROM tbl_customer";
                 $res = mysqli_query($conn, $sql);
                


              
              if($res==TRUE)
              {
                
                $count = mysqli_num_rows($res);
                $sn=1;
                if($count>0)
                {

                    while($rows=mysqli_fetch_assoc($res))
                    {

                      $id=$rows['id'];
                      $full_name=$rows['full_name'];
                      $username=$rows['username'];
                      ?>
                    
                    

<tr>
                <td><?php echo $sn++; ?> </td>
                <td> <?php echo $full_name; ?></td>
                <td> <?php echo $username; ?></td>
                <td>
                    
                    
                </td>
              </tr>

                      <?php

                }
              }
              else{

              }
            }


               ?>

              
              
             </table>


             
           </div>

              
            </div>
            <!-- Main Content Section Ends -->
              

            <?php include('partials/footer.php');  ?> 

