<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/dark-nav.css">  
    <!-- imported from google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">
    <!-- imported from fontawesome to use icons -->
    <script src="https://kit.fontawesome.com/25b13f05a6.js"></script>
    <title>Services</title>
</head>
<body> 
    <!-- Nav Include -->
    <?php include 'includes/nav.inc.php'?> 

    <!-- Main body of Services --> 
    <main id="services-container"> 
        <div id="services-wrap">

        <!-- Header -->
            <h1 id="services-header">My Services</h1> 

        <!-- Card 1-->
            <div class="services-items-container" id="web-design-container"> 
                 <div class="services-item-1-container" id="web-design-img">  
                    <img src="imgs/005-layout.png" alt="img-layout">
                 </div>
                 <div class="services-item-2-container" id="web-design-text">
                     <div class="services-text-container">                         
                         <h1 class="services-header-text-1">Web Designer</h1>
                         <h2 class="services-header-text-2">UI and UX Focused</h2>
                         <p class="services-body-text">I create sleak, and effective layouts designed personally for the people that need them on any screen.</p>
                     </div> 
                     <div class="services-text-container">
                         <h1 class="services-header-text-1">HTML and CSS</h1>
                         <h2 class="services-header-text-2">Responsive and Dynamic</h2>
                         <p class="services-body-text">A good house is only as strong as the foundation it’s sits. I believe a good web site functions similary.</p>
                     </div>
                 </div>
            </div>

        <!-- Card 2 -->
            <div class="services-items-container" id="Server-container"> 
                 <div class="services-item-1-container" id="Server-img">  
                    <img src="imgs/006-database-storage.png" alt="img-database">
                 </div>
                 <div class="services-item-2-container" id="server-text">
                     <div class="services-text-container">                         
                         <h1 class="services-header-text-1">Back End Support</h1>
                         <h2 class="services-header-text-2">Database Upkeep</h2>
                         <p class="services-body-text">I offer  strong back end support managing databases using PHP and MySQLi </p>
                     </div> 
                     <div class="services-text-container">
                         <h1 class="services-header-text-1">Serverside</h1>
                         <h2 class="services-header-text-2">Longterm Support</h2>
                         <p class="services-body-text">When you work with me you can expect strong database upkeep and uptimes.</p>
                     </div>
                 </div>
            </div>

        <!-- Card 3 -->
            <div class="services-items-container" id="customer-service-container"> 
                 <div class="services-item-1-container" id="customer-service-img">  
                    <img src="imgs/007-support.png" alt="img-layout">
                 </div>
                 <div class="services-item-2-container" id="customer-service-text">
                     <div class="services-text-container">                         
                         <h1 class="services-header-text-1">Customer Service</h1>
                         <h2 class="services-header-text-2">24 hour contact</h2>
                         <p class="services-body-text">Feel free to <a href="contact.php" id="contact-link">contact</a> me anytime, I check my email daily. I promise immediate response time and continued contact.</p>
                     </div> 
                     <div class="services-text-container">
                         <h1 class="services-header-text-1">Client Assurance</h1>
                         <h2 class="services-header-text-2">One on One Attention</h2>
                         <p class="services-body-text">I’ll work with you from start to finish to make sure you’re website is exactly what you dream it is.</p>
                     </div>
                 </div>
            </div>
        </div>
        
    <main> 

    <!-- Footer Include --> 
    <?php include 'includes/footer.inc.php'?>  
<script src="js/app.js"></script>
</body> 
</html>
