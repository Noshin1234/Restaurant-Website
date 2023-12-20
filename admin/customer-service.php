<?php include('partials/footer_font.php');  ?>
<?php 
    if(isset($_SESSION['order']))
    {
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
    ?>
<div class="main-content" style="background-image: url('ret.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh;">
    <div class="wrapper" style="background-color: rgba(255, 255, 255, 0.7); padding: 20px; text-align: center;;">


            <h1>Customer Service</h1>
            
            
        <div class="button-list">
            <a href="sea.php" class="btn-secondary medium-button">Search_Food_Items</a>
            <a href="foo_me.php" class="btn-secondary medium-button">View Different Catagories of foods</a>
            <a href="foods.php" class="btn-secondary medium-button">View each food's price and its description</a>
            
        </div>
    </div>
</div>


            
          




