<?php

phpinfo();

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializai una nueva sesion de curl ; ch = cURL handle
$ch = curl_init(API_URL);
//Inicializar que queremos recibir el resultado de la petición y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* 
Ejecutar la petición
y gardar el resultado en la variable $response
*/
$result = curl_exec($ch);
//Transformar el json de sesultado en un array asociativo
$data = json_decode($result, true);
//Cerrar la sesión de curl
curl_close($ch);

var_dump($data);

?>

<main>
    <h2>La próxima pelicula de Marvel</h2>
</main>