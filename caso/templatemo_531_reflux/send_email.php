<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "auroracurcio2006@gmail.com";

    // Intestazioni dell'email
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Contenuto dell'email
    $email_content = "Hai ricevuto un nuovo messaggio dal modulo di contatto del tuo sito web:<br><br>";
    $email_content .= "<strong>Nome:</strong> $name<br>";
    $email_content .= "<strong>Email:</strong> $email<br>";
    $email_content .= "<strong>Oggetto:</strong> $subject<br>";
    $email_content .= "<strong>Messaggio:</strong> $message<br>";

    // Invia l'email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "Email inviata con successo!";
    } else {
        echo "Errore durante l'invio dell'email.";
    }
}
?>
