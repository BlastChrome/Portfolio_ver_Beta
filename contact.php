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
    <title>Contact</title>
</head>
<body> 
    <!-- Nav Include -->
    <?php include 'includes/nav.inc.php'?>

    <!-- Main body of contact -->
    <main id="contact-container">  
        <div id="contact-wrap">
            <h1 id="contact-header">Let's get in touch</h1>
            <form id="contact-form-container" action="includes/contacts.inc.php" method="post">
                <div class="contact-form-wrap">
                    <label id="name_label" class="contact-label"  for="name">Name:</label> 
                    <input id="name_input" class="contact-input" type="text" name="name" >
                </div>
                <div class="contact-form-wrap">
                    <label id="email_label" class="contact-label" for="email">Email:</label> 
                    <input id="email_input" class="contact-input" type="email" name="email">
                </div>
                <div class="contact-form-wrap">
                    <label id="name_label" class="contact-label" for="proposal">Tell me how I can help.</label> 
                    <textarea rows="10" cols="25" id="message_input" class="contact-input" type="text" name="proposal"></textarea>
                </div>
                <div class="submit-wrap">
                    <button id="submit-btn" name="cSubmit" type="submit">Send</button>
                </div>
            </form>
        </div>
    </main> 
    <!-- Footer Include --> 
    <?php include 'includes/footer.inc.php'?>
<script src="js/app.js"></script>
</body>
</html>