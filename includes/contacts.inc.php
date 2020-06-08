<?php 
// Checks if the user, got to the page through the contact.html submit button 
if(isset($_POST['cSubmit'])){ 
    // Database include
    require 'cdbh.inc.php'; 

    //taking user input from forms; assigning data to variables
    $contactName = $_POST['name'];
    $contactEmail = $_POST['email'];
    $contactMessage = $_POST['proposal'];   

    // Error Handlers 
    //checks if the user left an input empty(html includes required fields but that's not enough)
    if(empty($contactName) || empty($contactEmail) || empty($contactMessage)){
        // sends the user back to a page, with a error message in the url
        //also configured to save form information on reload 
        header("Location: ../contact.php?error=emptyfields&name=".$contactName."&proposal=".$contactMessage); 
        exit();
    } 
    // checking for invalid email
    elseif(!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../contact.php?error=invalidmail&email=".$contactEmail); 
        exit(); 
    }  
    //insert data into database using prepared statements 
    else{
        // insert user into the database 
        $sql = "INSERT INTO contact (cName, cEmail, cMessage) VALUES (?, ?, ?);";

        //create prepared statement 
        $stmt = mysqli_stmt_init($conn);   

        //check for connection failure 
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../contact.php?error=sqlerror"); 
            exit(); 
        }  else{
            // finallly send data to database
            mysqli_stmt_bind_param($stmt, "sss", $contactName,$contactEmail, $contactMessage); 
            mysqli_stmt_execute($stmt); 
            header("Location: ../contact.php?contact=success"); 
            exit(); 
        }
    } 
    mysqli_stmt_close($stmt); 
    mysqli_close($conn);
} 
// Sends the user back to the contact page, if they access the php file w/o pressing submit
else{
    header("Location: ../contact.php"); 
    exit();   
}