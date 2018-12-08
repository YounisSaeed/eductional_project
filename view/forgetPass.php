<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            education system
        </title>
        <link rel="stylesheet" a href="styles/forget.css"/>
    </head>
    <body>
        <div class="createbox">
         <h2>Forget Password  </h2>
         <form method="post" action="../Files/sendMail_file.php">
            <div class="emaild">
                    <label>Email:</label><br/>
                    <input type="email" name="email" placeholder="Enter your email" required><br/>
            </div>
            <div class="button">
                <input type="submit" value="Send Email" name="sendemail" class="button">

            </div>
                     </form>

            </div>
                
            
         
        <?php
         //include 'connection.php';
//        if(isset($_POST['sendemail'])){
//        $email=$_POST['email'];
//         require 'PHPMailer-master/PHPMailerAutoload.php';//the name of file  phpmailer 
//         $mail = new PHPMailer();
//         $mail ->IsSmtp();
//         $mail ->SMTPDebug = 0;
//         $mail ->SMTPAuth=TRUE;// it sure the email found and true
//         $mail ->SMTPSecure = 'ss1';
//         $mail ->Host ="smtp.gmail.com";
//         $mail ->port=465;// or 587
//         $mail ->IsHTML(true);
//         $mail ->Username ="younissaiedfcih@gmail.com";
//         $mail ->Password ="younis20172018";
//         $mail ->setFrom("younissaiedfcih@gmail.com");
//         $mail ->Subject = "welcome from educational";
//        $mail ->Body = "this is a test message";
//        echo "Mail_1";
//        $mail-> AddAddress($email);
//        echo "Mail_2";
//        
//         if(!$mail->send())
//         {
//             echo "Mail Not Sent__ OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO_";
//         }
//         else 
//         {
//             echo "Mail Sent __ XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
//         }
//         
//        }
        ?>
    </body>
</html>
