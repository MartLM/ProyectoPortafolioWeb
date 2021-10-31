<?php

if (isset($_POST['submit'])){
    if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['affair']) && !empty($_POST['message']) ){
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $asunto = $_POST['affair'];
        $msg = $_POST['message'];
        $header = "From: lagunamorenoab@gmail.com" . "\r\n";
        $header.= "Reply-To: lagunamorenoab@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email, $asunto, $msg, $header);
        if ($mail){
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}