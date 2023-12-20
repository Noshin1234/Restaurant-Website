<?php include('../config/constraints.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="sele.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="logogo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
        

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->




    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

           <?php
           $search = $_POST['search'];
           $sql = "SELECT * FROM tb_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
           $res = mysqli_query($conn, $sql);
           $count = mysqli_num_rows($res);
           if($count>0)
           {

            while($row=mysqli_fetch_assoc($res))
            {
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];

                ?>


                 <div class="food-menu-box">
                  <div class="food-menu-img">
                    <?php
                    if($image_name=="")
                    {
                        echo "<div class='error'>Image not found.</div>";

                    }
                    else
                    {

                        ?>

                         <img src="<?php echo SITEURL; ?>images/category/<?php echo  $image_name; ?>"alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        <?php


                    }

                    ?>
                    
                    </div>
                    <div class="food-menu-desc">
                        <h4><?php echo $title; ?></h4>
                        <h4><?php echo $price; ?></h4>
                        <h4><?php echo $description; ?></h4>
                        <br>
                        <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                </div>

                

                <?php
            }

           }
           else 
           {
            echo "<dic class='error'>Food not available </div>";

           } 

           ?>






            


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    
    <!-- footer Section Ends Here -->

</body>
</html>