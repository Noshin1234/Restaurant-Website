<?php include('partials/menu_font.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Restaurant Management System</title>
    <style>
        body {
            background-color: hsl(36, 100%, 50%);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
       

        header {
            background-color: #e66700;
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

        #about-us {
            background-color: white;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #about-us h2 {
            font-size: 24px;
        }

        #about-us p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        #image-section {
            text-align: center;
            padding: 20px;
        }

        #image-section img {
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        @media (max-width: 768px) {
            #about-us {
                flex-direction: column-reverse;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Restaurant</h1>
        <nav>
            <ul>
               
            </ul>
        </nav>
    </header>

    <section id="about-us">
        <div id="image-section">
            <img src="102.jpg" alt="Restaurant Interior">
        </div>
        <div>
            <h2>About Us</h2>
            <p>Welcome to our restaurant management system. We are dedicated to providing you with the best dining experience. Our team is passionate about food and hospitality, and we strive to create memorable moments for our guests.</p>
            <p>Our restaurant is known for its diverse and delicious menu, featuring a wide range of cuisines to satisfy every palate. Whether you're in the mood for Italian, Mexican, or Asian cuisine, we have something to tantalize your taste buds.</p>
            <p>We take pride in using only the finest and freshest ingredients in our dishes. Our talented chefs craft each meal with precision and care, ensuring that every bite is a culinary delight.</p>
            <p>At our restaurant, customer satisfaction is our top priority. We are committed to delivering exceptional service and making your dining experience one to remember. Whether you're joining us for a romantic dinner, a family celebration, or a business lunch, we look forward to serving you.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Restaurant Management System</p>
    </footer>
</body>
</html>