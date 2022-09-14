<?php
/**
 * ErrorController 
 */
class ErrorController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();
    }	
    public function show404Action()
    {
        $this->response->setStatusCode(404, 'Not Found');
        $this->view->pick('error/404');
    }
}