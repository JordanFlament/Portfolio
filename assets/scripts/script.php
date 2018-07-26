<?php

$filtre = array(
    'name'  =>  FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS | FILTER_FLAG_NO_ENCODE_QUOTES,
    'email' =>  FILTER_VALIDATE_EMAIL,
    'message'  =>  FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS | FILTER_FLAG_NO_ENCODE_QUOTES,
    'confirmation'  => FILTER_SANITIZE_STRING | FILTER_SANITIZE_SPECIAL_CHARS | FILTER_FLAG_NO_ENCODE_QUOTES);
$result = filter_input_array(INPUT_POST, $filtre);

$name = trim($result['name']);
$smail = trim($result['email']);
$area = trim($result['message']);
$conf = trim($result['confirmation']);

    if(isset($name) && !empty($name) && isset($smail) && !empty($smail) &&  isset($area) && !empty($area) && isset($conf)){ 
        $mail_To = "Mail@site.com";
        $mail_Subject =  "Sujet";
        $headers = "From: site.com\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\n";
        $headers .= "Content-type: text/html; charset=utf-8\n";
        $mail_Body = "$name\n $smail \n Vous a répondu ; \n $area";
        if(mail($mail_To, $mail_Subject, $mail_Body, $headers)){
            $_SESSION['message'] ='ok good';
            unset($_POST);
        } else {
            $_SESSION['erreur'] ="bug complet";
        }
        header('Location: ../../index.html');
    }
?>