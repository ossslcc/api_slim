<?php
$app->get('/', function ($request, $response) {
    $data = array();
    $data['version'] = 'v1.0.0';
    $data['date'] = gmdate("Y-m-d H:i:s");
    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader('Content-type', 'application/json');
    return $response;
});
/*
$app->get('/db', function ($request, $response) {
  $data = array();

  if ($response->getStatusCode() == 200) {
    $this->db_name->query("SELECT * FROM ...");

    ....

    $response->getBody()->write(json_encode($data));
    $response = $response->withHeader('Content-type', 'application/json');
  }
  return $response;
});
*/
