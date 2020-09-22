<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', LOGGER));

class App
{
    private $log;
        
    public function __construct()
    {
        $this->log = new Logger('App');
        $this->log->pushHandler(new StreamHandler('log/my.log', LOGGER));
        $htis->log->info('Create App');
    }
    
    public function run()
    {
        $this->log->debug('App run');
        echo $this->renderTemplate('views/layouts/main.php');
    }
    
    public function renderTemplate($template, $params = [])
    {
        $this->log->debug('App renderTemplate');
        ob_start();
        $this->log->trace($params);
        extract($params);
        include $template;
        return ob_get_clean();
    }

}