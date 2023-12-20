<?php include('../config/constraints.php');?>
<html>
    <head>
        <title>Customer Login - Food Order System</title>
        <link rel="stylesheet" href="stiled.css">
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">Customer Login</h1>
            <br><br>
             <?php
             if(isset($_SESSION['login']))
             {
                 echo $_SESSION['login'];
                 unset($_SESSION['login']);
             }
             ?>
             <br><br>



            <form action="" method="POST" class="text-center">
                Username:<br>

                <input type="text" name="username" paceholder="Enter username"><br><br>

                Password:<br>

                <input type="password" name="password" placeholder="Enter Password"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-primary"><br><br>
                  </form>
            

</div>
</body>
</html>

<?php 
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            header('location:'.SITEURL.'admin/menucu.php');

        }
        else
        {
            $_SESSION['login'] = "<div class='error'>Failed to login.</div>";
            header('location:'.SITEURL.'admin/cus_login.php');

        }
    }