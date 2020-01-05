<?php

function convert_total($sum_select,$calorie){

    $back_total = ($calorie*100)/$sum_select;
    return $back_total;



}
function convert_needed($total_con,$needed){

    $back_nedded = ($needed * $total_con)/100;
    return $back_nedded;

}
function convert_scale($default_cal,$default_item,$needed){

    $back_scale = ($default_item*$needed)/$default_cal ;
    return $back_scale;

}
function mail_send($mail_f,$mailc_f,$password){


    require'PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.$mailc_f.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'riaz.i3214@gmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('from@example.com', 'Diet Chart');
    $mail->addAddress($mail_f);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Password Update'.date('d M Y');
    $mail->Body    = "Your password is {$password}";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();



}

function mail_which($string){

    $ans  = substr($string,strpos($string,'@')+1,strpos($string,'.')+1);

    return $ans;
}


