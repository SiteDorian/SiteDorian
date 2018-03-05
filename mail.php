<?php
$errors = '';
$myemail = 'dj.dorian98@gmail.com, d.gotonoaga@yandex.ru';//<-----Put Your email address here.
if(empty($_POST['src'])  ||
   empty($_POST['email']) ||
   empty($_POST['subiect']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$subiect = $_POST['numar'];
$message = $_POST['mesaj'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Mesaj SiteDorian.github.io";
$email_body = "Ai primit un nou mesaj. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($myemail,$email_subject,$email_body, $headers);
//redirect to the 'thank you' page
header('Location: 3.html');
}
else echo "Eroare trimitere!";

?>