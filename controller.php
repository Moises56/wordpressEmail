<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "datos";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos);
    



    $resend = Resend::client('re_bmYQBbf3_N7gM7oVTnyujyndRMmRgKBmu');

    $resend->emails->send([
    'from' => 'onboarding@resend.dev',
    'to' => 'moiavil56@gmail.com',
    'subject' => 'Hello World',
    'html' => '<p>Congrats on sending your <strong>first email</strong>!</p>'
    ]);
?>