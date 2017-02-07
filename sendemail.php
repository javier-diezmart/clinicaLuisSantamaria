<?php
	header('Content-type: application/json');

    $peticion = $_POST;

    $name = @trim(stripslashes($peticion['nombre'] . $peticion['surname']));
    $email = @trim(stripslashes($peticion['email']));
    $subject = @trim(stripslashes('ClinicaZorita'));
    $message = @trim(stripslashes($peticion['message']));

    $status = array(
        'type'=>'success',
        'message'=>'Email enviado! ' . $peticion['nombre']
    );


    $email_from = $email;
    $email_to = 'javier.diezmart@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'. $email_from .'>');

    echo json_encode($status);
    die;
