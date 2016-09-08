<?php

    $p_name = trim(stripslashes(htmlspecialchars($_POST['person_name']))); 
    $c_name= trim(stripslashes(htmlspecialchars($_POST['company_name'])));          
    $c_email = trim(stripslashes(htmlspecialchars($_POST['company_email'])));         
    $c_phone = trim(stripslashes(htmlspecialchars($_POST['company_number'])));          
    $c_details= trim(stripslashes(htmlspecialchars($_POST['company_details'])));  

    $emaillist = 'sidney@standbrightstudios.com, findme@carlosamarra.com';

    $to      = $c_email;

    $subject = $c_name." inquired about a video.";

    $message = "<html><body>";
    $message .= "<table style='width: 300px;'>";

    $message .= "<tr><th colspan=2 style='background-color: #57c6eb; color: white; padding: 20px; font-family:Verdana,Geneva,sans-serif; font-weight: bold; font-size: 30px;'>SBS Recipt</th></tr>";

    $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px; width: 130px;'>Contact Name</td><td>$p_name</td></tr>";

    $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px; width: 130px;'>Company Name</td><td>$c_name</td></tr>";

    $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px; width: 130px;'>Company Email</td><td>$c_email</td></tr>";

    $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px; width: 130px;'>Company Phone</td><td>$c_phone</td></tr>";

    $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td colspan=2 style='padding: 10px;'>Additional Details:</td></tr>";

    $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td colspan=2 style='padding: 10px;'>$c_details</td></tr>";

    $message .= "<tr><th colspan=2 style='background-color: #57c6eb; color: white; padding: 20px; font-family:Verdana,Geneva,sans-serif; font-weight: bold; font-size: 20px;'>Thank You For Contacting Us!</th></tr>";

    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "From: hello@standbrightstudios.com\r\n";
    $headers .= "Bcc: $emaillist\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail($to, $subject, $message, $headers);
?>