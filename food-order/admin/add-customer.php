<?php include('partials/footer_font.php');  ?>
<link rel="stylesheet" href="../css/add-admin.css">

<div class="main-content" style="background-image: url('yellow.jpeg');">
<div class="wrapper" style="background-color: rgba(3000, 3000, 3000, 0.7); padding: 20px;">
        <h1> Add Customer </h1>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            ?>

        <form action=" " method="POST">
            <table class="tbluu">
                <br><br>
                <tr>
                    <td> Full Name</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                   </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                 </td>
                   </tr>
                   <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" placeholder="Your password">
                 </td>
                   </tr>

                   <tr>
                    <td colspan="2">
                        <input type ="submit" name="submit" value="Add Admin" class="btn-secondary">
                   </td>
                 </tr>

    </table>
            </form>
   </div>
  </div>


<?php include('partials/footer.php');  ?>



<?php
    

    if(isset($_POST['submit']))
    {

     $full_name = $_POST['full_name'];
     $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tbl_customer SET
       full_name='$full_name',
       username='$username',
       password='$password'
       ";

       

     
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
    if($res==TRUE)
    {



        $_SESSION['add'] = "Customer Registered Successfully";
        header("location:".SITEURL.'admin/cus.php');
    }
    else{
        $_SESSION['add'] = "Customer registration failed";
        header("location:".SITEURL.'admin/cus.php');

    }



    }
    ?>
    
