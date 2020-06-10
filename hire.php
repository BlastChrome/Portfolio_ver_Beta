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
    <title>Hire</title>
</head>
<body> 
    <!-- Nav Include -->
    <?php include 'includes/nav.inc.php'?>

    <!-- Main body of hire -->
    <main id="contact-container">  
        <div id="contact-wrap">
            <h1 id="contact-header">Let's collaborate </h1>
            <form id="contact-form-container" action="includes/hire.inc.php" method="post">
                <div class="contact-form-wrap">
                    <label id="name_label" class="contact-label"  for="hname">Name:</label> 
                    <input id="name_input" class="contact-input" type="text" name="hname" >
                </div>
                <div class="contact-form-wrap">
                    <label id="email_label" class="contact-label" for="hemail">Email:</label> 
                    <input id="email_input" class="contact-input" type="email" name="hemail">
                </div>
                <div class="contact-form-wrap">
                    <label id="pre_contact_label" class="contact-label" for="hcontact">How would you like to stay in touch:</label> 
                    <input id="epre_contact_input" class="contact-input" type="text" name="hcontact">
                </div>
                <div class="branch-container">
                    <div class="contact-form-wrap">
                        <label id="pre_contact_label" class="contact-label" for="hsite">Your Site:(Url)</label> 
                        <input id="epre_contact_input" class="contact-input" type="text" name="hsite">
                    </div> 
                    <div class="contact-form-wrap">
                        <label id="pre_contact_label" class="contact-label" for="hhear">How did you get here:</label> 
                        <input id="epre_contact_input" class="contact-input" type="text" name="hhear">
                    </div> 
                </div> 
                <div class="contact-form-wrap">
                    <h1 id="proj-header-text-1">Project Details</h1>  
                    <p id="proj-header-text-2">Please specify a budget and ideal completion date. This helps me   determine the best solution that works for you.</p> 
                    <hr>
                </div>  
                <div class="branch-container">
                    <div class="contact-form-wrap">
                        <label id="pre_contact_label" class="contact-label" for="hprice">Budget:</label> 
                        <input id="epre_contact_input" class="contact-input" type="text" name="hprice">
                    </div> 
                    <div class="contact-form-wrap">
                        <label id="pre_contact_label" class="contact-label" for="hdate">Completion Date:</label> 
                        <input id="epre_contact_input" class="contact-input" type="text" name="hdate">
                    </div> 
                </div>               
                <div class="contact-form-wrap">
                    <label id="name_label" class="contact-label" for="hproposal">Project Discription.</label> 
                    <textarea rows="10" cols="25" id="message_input" class="contact-input" type="text" name="hproposal"></textarea>
                </div>  
                <div class="submit-wrap">
                    <button id="submit-btn" name="hSubmit" type="submit">Send</button>
                </div>
            </form>
        </div>

    </main> 
    <!-- Footer Include --> 
    <?php include 'includes/footer.inc.php'?>
<script src="js/app.js"></script>
</body>
</html>