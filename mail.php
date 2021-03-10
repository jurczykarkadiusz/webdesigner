<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: ajdev.pl'; 
$to = 'contact@ajdev.pl'; 
$subject = 'ZAPYTANIE';
$body = "Od: $name\n E-Mail: $email\n Wiadomość:\n $message";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$headers .= 'From: from@example.com' . "\r\n" .
'Reply-To: reply@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();


mail( 'contact@ajdev.pl', $subject, $body, $headers );
// Die with a success message
// die("<span class='success'>Wiadomość została wysłana.</span>");
header("Location: last_page.html");
exit;
?>