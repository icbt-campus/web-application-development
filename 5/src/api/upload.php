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

  // https://www.php.net/manual/en/ref.strings.php
  $username = ltrim($_POST['username'], '@');
  $extension = pathinfo($_FILES['image']['name'])['extension'];

  $destination = "{$_SERVER['DOCUMENT_ROOT']}/blob/{$username}-{$_SERVER['REQUEST_TIME']}.${extension}";

  // https://www.php.net/manual/en/function.copy.php
  $status = copy($_FILES['image']['tmp_name'], $destination);

  if ($status == false) {
    dispatch_failure(500, 'Internal Server Error');
    return;
  }

  dispatch_success(201, 'Created');

?>
