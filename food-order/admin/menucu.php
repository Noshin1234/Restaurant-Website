<?php include('partials/menu_font.php');  ?>
<html>
    <head>
        <title>Restaurant Website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="top">
          
           <div class="logo">GRANDIOSE</div>
            <div class="nav">
                
            </div>
            <nav>
           
            <div class="icon">
                <i onclick="login()" class="fa-solid fa-user"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i onclick="nav()"class="fa-solid fa-bars"></i>
            </div>
        </nav>
           
        </div>
  
        <div class="heading">
            <div class="left">
                <p>Are You Hungry?</p>
                <h1>Don't Wait</h1>
                <p>Let start to order food now</p>

                <button>Check out Menu</button>
            </div>
            <div class="login">
                <h2> Log In</h2>
                <input type="text" placeholder="Enter Your Name">
                <input type="password" placeholder="Enter Password"><br>
                <button> Log In</button>
            </div>
          

            <div class="right" id="food"></div>

            <div class="SocialMedia">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
        </div>
        
      
       
        <div class="bottom">
            <div class="menu">
                <div id="food1"></div>
                <div id="food2"></div>
            </div>
          
         
                
         
        </div>
      
        <script src="javascript.js"></script>

    </body>
    </html>