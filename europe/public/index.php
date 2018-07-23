<?php 

use Symfony\Component\HttpFoundation\Request;

// Load the application autoloader
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// Create a new application, as parameters we give the current server request and
// the "../app/logs/dev.log" file, to set the log file
$application = new Application(
    Request::createFromGlobals(),
    dirname(__DIR__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR.'dev.log'
);

// We start here the application process, and send the response to the client
$response = $application->execute();
$response->send();
