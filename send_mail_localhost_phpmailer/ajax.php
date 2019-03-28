

<?php
		date_default_timezone_set('Asia/Kolkata');

        require 'PHPMailer/PHPMailerAutoload.php';

        $from =  $_REQUEST['fmail'];
        $pass = $_REQUEST['fmailpass'];
        $to = $_REQUEST['tmail'];
        $sbjct = $_REQUEST['sj'];
        $msg = $_REQUEST['msg'];

        $mail = new PHPMailer(true);         
        try {
            $mail->SMTPDebug = 0;                      
            $mail->isSMTP();                                 
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                       
            $mail->Username = $from;              
            $mail->Password = $pass;                 
            $mail->SMTPSecure = 'tls';                   
            $mail->Port = 587;                         
            $mail->setFrom($from);
            $mail->addAddress($to);
            $mail->isHTML(true);                        
            $mail->Subject = $sbjct;
            $mail->Body    = $msg;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '<small class="bg-success m-auto text-white p-1">Sent to -> <b>'.$to.'</b> At -> '.date("H:i:s d-M-Y").'</small>';
        } catch (Exception $e) {
            echo '<small class="bg-danger m-auto text-white p-1">Message could not be sent. Mailer Error: ', $mail->ErrorInfo.'</small>';
        }

?>