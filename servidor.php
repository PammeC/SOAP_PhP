<?php
class HelloWorldService {
    //Method exposed via SOAP
  
    public function helloWorld() {
        return "¡Hello World from SOAP with PHP!";
    }
}

// SOAP Server Configuration
$options = [
    'uri' => "http://localhost/soap-server"
];

$server = new SoapServer(null, $options);
$server->setClass('HelloWorldService');
$server->handle();
?>