<?php
try {
    $client = new SoapClient(null, array(
            'uri' => 'https://soap-automoviles.herokuapp.com/',
            'location' => 'https://soap-automoviles.herokuapp.com/service-automoviles-auth.php',
            'trace' => 1
    )
  );

  $auth_params = new stdClass();
  $auth_params->username = "ies";
  $auth_params->password = "daw";
  $header_params = new SoapVar($auth_params,SOAP_ENC_OBJECT);
  $header = new SoapHeader('https://soap-automoviles.herokuapp.com/service-automoviles-auth.php', 'authenticate', $header_params, false);
  $client->__setSoapHeaders(array($header));

} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}

?>