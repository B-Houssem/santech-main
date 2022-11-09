<?php
if(!isset($_POST['submit']))
{
    echo "erreur, tu dois envoyer un formulaire!";
}
$name = $_POST['name'];
$v_mail = $_POST['email'];
$message = $_POST['msg'];

if(empty($name)||empty($v_mail)||empty($message))
{
    echo "if faut remplir tous le champs";
    exit;
}
$to = "endouanimedl@gmail.com";
$email_subject = "mail de formulaire";
$email_body = "vous avez recu un email de la par de $name. \n"."email: $v_mail\n"."le message:/n $message";
$headers = "From: $v_mail \r\n";
mail($to,$email_subject,$email_body,$headers);
echo "votre message est bien recu!"
?>