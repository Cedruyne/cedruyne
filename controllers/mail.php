<?php


if (!empty($_POST)){

    foreach($_POST as $field => $value){
        echo '<b>'.$field.'</b> : '.htmlspecialchars($value).'<br />';
    }

    $lastName = htmlspecialchars($_POST["lastName"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = "Envoi d'un message depuis le site cedruyne.fr";
    $message = htmlspecialchars($_POST["message"]);
    $to = "cdebruyne@outlook.com";

    $headers =  'From:'. $email . "\r\n" .
                'Reply-To:'. $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers))
    {
        echo "Le message a bien été envoyé";
    } else
    {
        echo 'Le message n\'a pu être envoyé';
    }

}