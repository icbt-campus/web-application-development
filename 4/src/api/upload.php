<?php

  /**
   * upload.php
   * Instagram Clone
   *
   * Ashen Gunaratne
   * mail@ashenm.ml
   *
   */

  function dispatch_failure ($code, $message) {
    http_response_code($code);
    header('Content-Type: application/json');
    echo json_encode([ 'error' => [ 'code' => $code, 'message' => $message ] ]);
  }

  function dispatch_success ($code, $message) {
    http_response_code($code);
    header('Content-Type: application/json');
    echo json_encode([ 'status' => [ 'code' => $code, 'message' => $message ] ]);
  }

  // handle non compliant requests
  // https://www.php.net/manual/en/reserved.variables.server.php
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    dispatch_failure(405, 'Method Not Allowed');
    return;
  }

  // ensure requisite request data
  // https://www.php.net/manual/en/reserved.variables.post.php
  if (empty($_POST['username']) || empty($_FILES['image'])) {
    dispatch_failure(400, 'Bad Request');
    return;
  }

  // TODO save image
  dispatch_success(201, 'TODO');

?>
