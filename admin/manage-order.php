<?php include('partials/menu.php');  ?>
           
<div class="main-content" style="background-image: url('R.jpg');">
<div class="wrapper" style="background-color: rgba(3000,3000, 3000, 0.7); padding: 20px;">
            <h1>Manage Order</h1>
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
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br/><br/><br/>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th> Food</th>
                    <th> Price</th>
                    <th> Qty.</th>
                    <th> Total</th>
                    <th> Order Date</th>
                    <th> Status</th>
                    <th> Customer name</th>
                    <th> Contact</th>
                    <th> Email</th>
                    <th> Address</th>
                    
    
              </tr>
              <?php
              $sql = "SELECT * FROM tbl_order";
              $res = mysqli_query($conn, $sql);
              $count = mysqli_num_rows($res);
              $sn = 1;
              if($count>0)
              {

                while($row=mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $status = $row['status'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    $customer_email = $row['customer_email'];
                    $customer_address = $row['customer_address'];
                    ?>
                     <tr>
                <td><?php echo $sn++; ?>  </td>
                <td><?php echo $food; ?> </td>
                <td><?php echo $price; ?> </td>
                <td><?php echo $qty; ?> </td>
                <td><?php echo $total; ?> </td>
                <td><?php echo $order_date; ?> </td>
                <td><?php echo $status; ?> </td>
                <td><?php echo $customer_name; ?> </td>
                <td><?php echo $customer_contact; ?> </td>
                <td><?php echo $customer_email; ?> </td>
                <td><?php echo $customer_address; ?> </td>
                
        </tr>
                


                    <?php
                }

              }
              else
              {
                echo "<tr><td colspan='12' class='error'>Orders not available</td></tr> ";
              }
             
                 ?>

              
                    



              
              
             </table>


             
           </div>

              
            </div>
            <!-- Main Content Section Ends -->
              

            <?php include('partials/footer.php');  ?> 

