<?php
namespace App;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Symfony\Component\HttpFoundation\Response;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\HttpFoundation\Request;

/**
 * This class is the main application skeleton. It's used to define the base workflow of the request.
 * You'll have to overwrite the internal "run" method to implement your own logic.
 * 
 * @author matthieu vallance <matthieu.vallance@vesperiagroup.com>
 */
abstract class AbstractApplication
{
    /**
     * Logger
     * 
     * The application logger, to store the workflow informations
     * 
     * @var Logger
     */
    private $logger;
    
    /**
     * Request
     * 
     * The current server request, comming form the client
     * 
     * @var Request
     */
    private $request;
    
    /**
     * Construct
     * 
     * The default Application constructore, used to define the logger file storage
     * 
     * @param Request $request  The current server request
     * @param string  $logPath  The logger file
     * @param int     $logLevel The level of log to store (DEBUG, WARNING, ERROR, etc...)
     * 
     * @return void
     */
    public function __construct(Request $request, string $logPath, int $logLevel = Logger::DEBUG)
    {
        $this->logger = new Logger('App');
        $this->logger->pushHandler(new StreamHandler($logPath, $logLevel));
        
        $this->request = $request;
    }
    
    /**
     * Execute
     * 
     * Start the execution of the request workflow. Register an exception displayer to help debuging
     * 
     * @throws \Exception 
     * @return Response
     */
    public function execute()
    {
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();

        try {
            $this->logger->debug('Launch the application run');
            $result = $this->run();
            $this->logger->debug('No errors', ['result length' => strlen($result)]);
            $response = new Response($result);
            $this->configureResponse($response);
            
            return $response;
        } catch (\Exception $exception) {
            $this->logger->debug('Error reported', ['message' => $exception->getMessage(), 'trace' => $exception->getTrace()]);
            throw $exception;
        }
    }
    
    /**
     * Get request
     * 
     * Return the current server request
     * 
     * @return Request
     */
    protected function getRequest() : Request
    {
        return $this->request;
    }
    
    /**
     * Logger
     * 
     * Return the current application logger
     * 
     * @return Logger
     */
    protected function getLogger() : Logger
    {
        return $this->logger;
    }
    
    /**
     * Configure the response
     * 
     * If you need to set the headers or modify the response body before sending it to the client,
     * you can overwrite this method.
     * 
     * @param Response $response The response to be sent to the client
     * 
     * @return void
     */
    protected function configureResponse(Response $response)
    {}
    
    /**
     * Run
     * 
     * Execute the request process
     * 
     * @return string|NULL
     */
    protected abstract function run() : ?string;
}













