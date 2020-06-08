<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/light-nav.css">  
    <!-- imported from google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">
    <!-- imported from fontawesome to use icons -->
    <script src="https://kit.fontawesome.com/25b13f05a6.js"></script>
    <title>About</title>
</head>
<body> 
    <!-- Nav Include -->
    <?php include 'includes/nav.inc.php'?>

    <!-- Main body of about -->
    <main id="about-container"> 
        <div id="about-wrap">
            <div id="about-header" > 
                <img src="imgs/RegrettablePhoto.jpg" id="about-img" alt="smug-image-of-me">
                <h1 id="about-header-text-1">About Nick</h1> 
                <p id="about-header-text-2">My History</p>
            </div>
            <div class="about-item"> 
                <h1 class="about-item-header-text-1">Who I Am.</h1> 
                <p class="about-item-header-text-2">My name’s Nick, a self taught web developer from Hawthorne CA.  </p>
                <p class="about-item-header-text-2">In between building projects I’m currently persuing a degree in CS from Elcamino College in Torrance.  </p>
            </div>
            <div class="about-item"> 
                <h1 class="about-item-header-text-1">Lets work together</h1> 
                <p class="about-item-header-text-2">Building beautiful websites is my passion. </p>
                <p class="about-item-header-text-2"> I’m constantly learning new things in pursuit of honing my craft: amazing designs, great user experience, and building trust through reliability. </p>
            </div>
            <div class="about-item"> 
                <h1 class="about-item-header-text-1">Skills: </h1> 
                <div id="about-img-container">
                    <img src="imgs/001-html.png" class="about-body-img" alt="smug-image-of-me"> 
                    <img src="imgs/004-php.png" class="about-body-img" alt="smug-image-of-me"> 
                    <img src="imgs/003-javascript.png" class="about-body-img" alt="smug-image-of-me"> 
                    <img src="imgs/002-css.png" class="about-body-img" alt="smug-image-of-me">                     
                </div>
            </div>
        </div>
    </main> 
    <!-- Footer Include --> 
    <?php include 'includes/footer.inc.php'?>
<script src="js/app.js"></script>
</body>
</html>