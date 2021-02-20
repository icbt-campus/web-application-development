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
    return;
  }

  // ensure requisite request data
  // https://www.php.net/manual/en/reserved.variables.post.php
  if (empty($_POST['username']) || empty($_FILES['image'])) {
    http_response_code(400);
    return;
  }

  // TODO save image
  http_response_code(201);
  echo 'TODO';

?>
