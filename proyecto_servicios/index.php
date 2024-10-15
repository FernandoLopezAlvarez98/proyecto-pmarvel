<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesión de curl ; ch = cURL handle
$ch = curl_init(API_URL);
//Configurar opciones de cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
/* 
Ejecutar la petición
y guardar el resultado en la variable $response
*/
$result = curl_exec($ch);
//Verificar errores de curl

$data = json_decode($result, true);
curl_close($ch);


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima pelicula de Marvel</title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
        <img src="<?= $data['poster_url'] ?>" alt=<?= $data['title']?> width="200" style="border-radius: 10px;">
    </section>

    <hgroup>
        <h2><?= $data['title'] ?> se estrenara en <?= $data['days_until'] ?> días.</h2>
        <p>Fecha de estreno: <?= $data['release_date'] ?></p>
        <p>La siguiente es: <?= $data['following_production']['title'] ?></p>
    </hgroup>
    
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }
    
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>

