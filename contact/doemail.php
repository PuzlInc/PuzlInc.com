<?php
require_once "Mail.php";
if (isset($_POST['msg'])) {

$from = "Puzl website contact form <puzlwebsitecontactform@gmail.com>";
$to = "Steven Smith <blahblahblahblha303@gmail.com>";
$subject = "Puzl.io contact form message";
$body = $_POST['msg'];

$headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);

$smtp = Mail::factory('smtp', array(
    'host' => 'ssl://smtp.gmail.com',
    'port' => '465',
    'auth' => true,
    'username' => 'puzlwebsitecontactform@gmail.com',
    'password' => 'tntiskindacool'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}
} else {
die("Afraid not.");
}
