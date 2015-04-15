<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
 	public function __construct($application){
 	parent::__construct($application);
    $router = Zend_Controller_Front::getInstance()->getRouter();
    $route = new Zend_Controller_Router_Route(':action', array(
        'module'     => 'default',
        'controller' => 'index',
        'action'     => 'helloworld'
    ));
    $router->addRoute(null, $route);

    /*$route2 = new Zend_Controller_Router_Route(':action', array(
        'module'     => 'default',
        'controller' => 'index',
        'action'     => 'goodbyeworld'
    ));
    $router->addRoute('goodbyeworld', $route2);

    $route3 = new Zend_Controller_Router_Route(':action', array(
        'module'     => 'default',
        'controller' => 'index',
        'action'     => 'index'
    ));
    $router->addRoute('index', $route3);*/
 }
}

