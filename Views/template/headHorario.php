<?php
// Inicializar la sesion
session_start();

// Validar si se esta ingresando directamente sin login
if (!$_SESSION) {
    header('location: login');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo (media()) ?>/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo(media())?>/css/horarioDash.css">
    <link rel="stylesheet" href="<?php echo(media())?>/css/vistas.css">
    <link rel="stylesheet" href="<?php echo(media())?>/plugins/fontawesome-free/css/all.css">
    <title>HORARIO</title>
</head>

<body >