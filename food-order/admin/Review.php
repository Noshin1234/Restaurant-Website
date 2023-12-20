<?php include('partials/menu_font.php');  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer review</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body{
    font-family:'Roboto',sans-serif;
    background-color:rgb(247, 201, 0);
  color: white;
}
       .review{
    position: relative;
    display: flex;
    overflow: hidden;
    margin: auto;
    width: 800px;
    height: 400px;
    margin-top: 63px;
}
header {
            background-color:black;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

.review .customer{
    position: absolute;
     width: 100%;
     height: 80%;
    background-color: #fff;
    color: black;
    text-align: center;
    padding: 11px;
    transition: 0.5s ease;
     

}

.customer img{
    width:20%;
    border-radius: 50%;
}
.customer i{
    font-size: 22px;
    color: orangered;
    margin-top: 11px;
}
.head h1{
    text-align:40px;
   
    font-size:44px;
    margin-top:33px;
    margin-left:22px;
}
.head span{
    color: orangered;
}
.btn{
    text-align:center;

}
.btn button{
    width:140px;
    height:38px;
    border:none;
    outline:none;
    border-radius:3px;
    color:white;
    background-color: orangered;
    font-size:20px;
    margin-inline: 11px;
}
        .footer{
    display:flex;
    justify-content:space-around;
    background-color: white;
    padding:55px;
    margin-top:77px;
    

}
.footer .txt{
color:black;
}
.txt p{
    margin-top:12px;
}
    </style>
</head>
<body>
    <header>
  
    <h1>Customer <span>Review</span></h1>
        <nav>
            <ul>
                
            </ul>
        </nav>
    </header>
 
    <div class="review">
        <div class="customer">
            <img src="FB_IMG_1693459821903.jpg" alt="Customer 0"> <br>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>"I'm a regular here, and for a good reason. The food is consistently delicious</p>
            <p> It's my go-to place for a fantastic dining experience."</p>
        </div>
        <div class="customer">
            <img src="FB_IMG_1693459768159.jpg" alt="Customer 1"> <br>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>"The food at this restaurant is a culinary masterpiece, bursting with flavors that tantalize the taste buds. 
                An unforgettable dining experience!"</p>
        </div>
        <div class="customer">
            <img src="FB_IMG_1693459757871.jpg" alt="Customer 2"> <br>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <p>  Each bite was a delightful journey of taste and texture. Highly recommended!"</p>
        </div>
      
    </div>
    <div class="btn">
        <button onclick="pre()">Prev</button>
        <button onclick="next()">Next</button>
    </div>
    
    <!-- JavaScript code goes here -->
    <script>
        let slide = document.querySelectorAll(".customer");
        let count = 0;

        slide.forEach(function(customer, index) {
            customer.style.left = `${index * 100}%`
        });

        function next() {
            count++;
            if (count == slide.length) {
                count = 0;
            }
            bar();
        }

        function pre() {
            count--;
            if (count == -1) {
                count = slide.length - 1;
            }
            bar();
        }

        function bar() {
            slide.forEach(function (customer, index) {
                customer.style.transform = `translateX(-${count * 100}%)`;
            });
        }
    </script>
</body>
</html>