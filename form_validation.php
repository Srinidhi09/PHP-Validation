<?php
    $error = ""; $fieldsmissing = "";

    if ($_POST) {
        
        if (!$_POST["firstname"]) {   
            $fieldsmissing .= "First name is required.<br>";   
        }

        if (!$_POST["lastname"]) {
            $fieldsmissing .= "Last name is required.<br>";
        }

        if (!$_POST["contactno"]) {
            $fieldsmissing .= "Contact number is required.<br>";
        }

        if (!$_POST["radio-btn"]) {
            $fieldsmissing .= "Radio button value is required.<br>";  
        }

        if ($fieldsmissing != "") {
            $error .= $fieldsmissing;
        }

        if($_POST["firstname"] == $_POST["lastname"] && $_POST["firstname"] != "" && $_POST["lastname"] != ""){     
            $error .= "<p>First name and Last name should not match.<br>";
        }

        if ($error != "") {    
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p><br>' . $error . '</div>';    
        }  
        else {
            $emailTo = "jasonr45_2s6@indeedemail.com";

            $emailFrom = $_POST['email'];
            
            $subject = "GlobalFluency New Form Submission";
            
            $firstname = $_POST['firstname'];
            
            $lastname = $_POST['lastname'];

            $contactno = $_POST['contactno'];

            $interested = $_POST['radio-btn'];
            
            $headers = "From: ".$emailFrom;

            $content = "First Name: ".$firstname."\nLast Name: ".$lastname."\nContact Number: ".$contactno."\n\nInterested in Global Fluency? ".$interested;
            
            if (mail($emailTo, $subject, $content, $headers)) {     
                header("Location: success.html");    
            } 
            else { 
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';   
            }  
        } 
    }
?>