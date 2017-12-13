<?php

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["optGender"];
    $country = $_POST["selCountry"];

    $to = $email;
    $subject = "Test Job Application Form";

    $message = "
    <html>
    <head>
    <title>Sample Job Application Email</title>
    </head>
    <body>

    <table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Gender</th>
    <th>Country</th>    
    </tr>
    <tr>
    <td>". $firstName ."</td>
    <td>". $lastName ."</td>
    <td>". $gender ."</td>
    <td>". $country ."</td>    
    </tr>
    </table>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <keniqd@gmail.com>' . "\r\n";
    $headers .= 'Cc: keniqd@gmail.com' . "\r\n";

    mail($to,$subject,$message,$headers);
?>