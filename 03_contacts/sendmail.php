<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    session_start();

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];

        $subject = "Enquiry from ".$name.".";
        $body = "<b>From:</b> ".$name."<br><br> 
                <b>Email:</b> ".$email."<br><br> 
                <b>Phone:</b> ".$contact."<br><br>
                <b>Message:</b> ".$message."\n";
    
    
        //Load composer's autoloader
        require_once 'phpmailer/Exception.php';
        require_once 'phpmailer/PHPMailer.php';
        require_once 'phpmailer/SMTP.php';

    
        $mail = new PHPMailer(true);                            
        try {
            //Server settings
            $mail->isSMTP();                                     
            $mail->Host = 'smtp.gmail.com';                      
            $mail->SMTPAuth = true;                             
            $mail->Username = 'judybola13@gmail.com';     
            $mail->Password = 'lieknflwegyhxflr';            
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );                         
            $mail->SMTPSecure = 'tls';                           
            $mail->Port = 587;                                   
    
            //Send Email
            $mail->setFrom('bhcisystem@gmail.com');

            //Recipients
            $mail->addAddress('barangayhcis@zohomail.com');
    
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $body;
    
            $mail->send();
    
        $_SESSION['result'] = 'Message has been sent';
        $_SESSION['status'] = 'ok';
        } catch (Exception $e) {
        $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
        $_SESSION['status'] = 'error';
        }
    
        header("location: contacts.php");
    
    }
?>