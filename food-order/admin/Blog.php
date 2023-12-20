<?php include('partials/menu_font.php');  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
    background-color: rgb(247, 201, 0);
    margin: 0;
    padding: 0;
    color: rgba(255, 115, 0, 0.842); /* Text color for blogs */
    font-weight: bold; /* Bold text for blogs */
}

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
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

.crd{
    display:flex;
   
    margin-left: 55px;
    color:black;
   
}



/* CSS for individual blogs */
.blog{
    width:300px;
    height: 450px;
     
    
      background-color: white;
      border-radius: 4px;
      padding: 11px;
      color: black;
   
    margin-inline: 11px;
    margin-top: 60px; 

    
}

.blog img{
    width:100%;
}
.blog h1{
    margin-top: 12px;
 
}
.blog p{
    margin-top: 12px;;
}
.blog a{
    position: relative;
    top:10px;
    width:160px;
    padding: 10px;
    background-color: orangered;
    color: white;
    font-size: 20px;
    border-radius: 2px;
}
        </style>
       
        </head>
        <body>
            <header>
                <h1>Our Blogs</h1>
                <nav>
                    <ul>
                        
                    </ul>
                </nav>
            </header>
            
   <table>
    <tr>
    <td> 
        
        
        <div>
            <div class="crd">
                <div class="blog">
                    <left>
                    <img src="Panta_Ilish.jpg" alt="">
                    <h2> Fact about Bangladeshi Food</h2>
                    <p>
                        A burger is a tasty stack of ingredients, with a juicy patty and fixings, all snugly held together by a soft bun - a delicious handheld delight. It's comfort food that's loved worldwide!</p>
                    <a href="https://en.wikipedia.org/wiki/Bangladeshi_cuisine#:~:text=Rice%20is%20the%20staple%20food,of%20mustard%20oil%20is%20common.">Read More</a>
                
                </left></div>
                <div class="crd" >
                    <div class="blog">
                        <left>
                        <img src="OIP (1).jpg" alt="">
                        <h2> Different Types of Burger</h2>
                        <p>
                            Pizza is a heavenly circle of dough topped with tomato sauce, cheese, and endless possibilities of flavorful toppings, baked to perfection—a universally adored, cheesy delight!</p>
                            <a  href="https://medium.com/@tkabir616/6-burgers-you-must-eat-in-dhaka-c7a09a78ee15">Read More</a>
                        </left></div>
                    <div class="crd">
                        <div class="blog">
                            <left>
                            <img src="entree.jpg" alt="">
                            <h2> Delicious Chicken Recipes</h2>
                            <p>
                                Chicken fry is crispy, golden-brown chicken cooked to perfection, delivering a delicious crunch with each bite—a savory and satisfying treat!</p>
                                <a href="https://www.delish.com/cooking/recipe-ideas/g2972/chicken-weeknight-dinners/">Read More</a>
                            </left> </div>
                        
            </div>
            </div>
    
    </td>
    </tr>
        </table>
        </body>
        </html>