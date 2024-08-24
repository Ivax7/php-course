<?php

declare(strict_types=1);

function render_template(string $template, array $data = [])
{
  // como le pasamos el $data al template? -> con el método extract que extrae los valores de un array asociativo en variables
  extract($data);
  require "templates/$template.php";
};

function get_data(string $url) : array // lo que entra / lo que devuelve
{

  $result = file_get_contents($url); // si solo quieres hacer un GET de una API
  $data = json_decode($result, true);
  return $data;
};

function get_until_message(int $days) : string
{
  return match (true) {
    $days === 0   => "¡Hoy se estrena! 🥳",
    $days === 1   => "Mañana se estrena 🚀",
    $days < 7     => "En menos de una semana se estrena 😯",
    $days < 30    => "En menos de un mes se estrena 📆",
    default       => "$days días hasta el estreno 📅",
  };
};







// #Inicializar una nueva sesión de cURL; ch = cURL handle
// $ch = curl_init(API_URL);

// // Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Opcional: Desactivar la verificación SSL (solo para pruebas de desarrollo)
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// /*
// Ejecutar la petición
//   y guardamos el resultado
// */
// $result = curl_exec($ch);
// $data = json_decode($result, true); // true para que esté en un array asociativo

// // Ceerramos la sesión de cURL
// curl_close($ch);
