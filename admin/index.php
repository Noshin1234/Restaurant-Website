<?php include('partials/menu.php');  ?>
<div class="main-content" style="background-image: url('yellow.jpeg');">
<div class="wrapper" style="background-color: rgba(3000, 3000, 3000, 0.7); padding: 20px;">
           
          
           
            <h1>DASHBOARD</h1>
            <br><br>
            <?php
             if(isset($_SESSION['login']))
             {
                 echo $_SESSION['login'];
                 unset($_SESSION['login']);
             }
             ?>
             <br><br>

            <div class="col-4 text-center">
              <h1>5</h1>
              <br/>
                Categories
              </div>

              <div class="col-4 text-center">
              <h1>5</h1>
              <br/>
                Categories
              </div>

              <div class="col-4 text-center">
              <h1>5</h1>
              <br/>
                Categories
              </div>

              <div class="col-4 text-center">
              <h1>5</h1>
              <br/>
                Categories
              </div>

             <div class="clearfix"></div>

             
           </div>

              
            </div>
            <!-- Main Content Section Ends -->
            <?php include('partials/footer.php');  ?>
              

            
