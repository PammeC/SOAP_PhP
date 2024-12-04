<?php
try {
    // SOAP client configuration
    $options = [
        'location' => "http://localhost/soap-server.php",
        'uri' => "http://localhost/soap-server"
    ];

    $client = new SoapClient(null, $options);

    // HelloWorld method call
    $response = $client->helloWorld();

    echo "Respuesta del servidor: $response";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>