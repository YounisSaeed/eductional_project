<?php

$email=$_POST['email'];
         require '../Libraries/PHPMailer-master/PHPMailerAutoload.php';//the name of file  phpmailer 
         $mail = new PHPMailer();
         $mail ->IsSmtp();
         $mail ->SMTPDebug = 0;
         $mail ->SMTPAuth=TRUE;// it sure the email found and true
         $mail ->SMTPSecure = 'ss1';
         $mail ->Host ="smtp.gmail.com";
         $mail ->port=465;// or 587
         $mail ->IsHTML(true);
         $mail ->Username ="younissaiedfcih@gmail.com";
         $mail ->Password ="younis20172018";
         $mail ->setFrom("younissaiedfcih@gmail.com");
         $mail ->Subject = "welcome from educational";
        $mail ->Body = "this is a test message";
        echo "Mail_1";
        $mail-> AddAddress($email);
        echo "Mail ".$email;
        
         if(!$mail->send())
         {
             echo "Mail Not Sent__ OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO_";
         }
         else 
         {
             echo "Mail Sent __ XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
         }
         

