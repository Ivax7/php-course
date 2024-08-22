



<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*
Ejecutar la petición
  y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true); // true para que esté en un array asociativo

// Ceerramos la sesión de cURL
curl_close($ch);


?>


<head>
  <meta charset="UTF-8" />
  <title>La próxima película de Marvel</title>
  <meta name="description" content="La próxima película de Marvel" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />


</head>




<main>
  <pre style="font-size: 8px; overflow:scroll; height:250px;">
    <?php var_dump($data); ?> 
  </pre>
  <section>
    <!-- <img src="$data.poster_url" /> -->
    <h2>La próxima película de marvel</h2>
  </section>
</main>



<style>
  :root {
    color-scheme: light dark;
  }
  body {
    display: grid;
    place-content: center;
  }
</style>
