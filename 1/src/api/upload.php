<?php

  /**
   * upload.php
   * Instagram Clone
   *
   * Ashen Gunaratne
   * mail@ashenm.ml
   *
   */

  // handle non compliant requests
  // https://www.php.net/manual/en/reserved.variables.server.php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo '{ "error": { "code": 405, "message": "Method Not Allowed" } }';
    return;
  }

  // ensure requisite request data
  // https://www.php.net/manual/en/reserved.variables.post.php
  if (empty($_POST['username']) || empty($_FILES['image'])) {
    http_response_code(400);
    echo '{ "error": { "code": 400, "message": "Bad Request" } }';
    return;
  }

  // TODO save image
  http_response_code(201);
  echo '{ "status": { "code": 201, "message": "TODO" } }';

?>
