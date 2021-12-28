<?php

if (!empty($_GET['code'])) {
  $key = $_GET['code'];

  $redirects = file_get_contents('data.json');
  $redirects = json_decode($redirects, true);

  if (isset($redirects[$key]) && !empty($redirects[$key]['locations'])) {
    header('Location: ' . $redirects[$key]['location']);
    exit();
  }
}

http_response_code(404);



 ?>
