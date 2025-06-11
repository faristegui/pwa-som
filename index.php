<?php
// index.php

// Configuración básica
$title = "Mi Sitio en PHP";
$mensaje = "¡Hola mundo desde PHP!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
  <style>
    body {
      font-family: sans-serif;
      background: #f9f9f9;
      padding: 2rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1><?= $mensaje ?></h1>
  <p>Este es un archivo <strong>index.php</strong> básico funcionando.</p>
</body>
</html>
