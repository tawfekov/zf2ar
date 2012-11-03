<?php
namespace ZF2ar ; 

class Module 
{

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig($env = null)
    {
        return include __DIR__ . '/config/module.config.php';
    }
    public function getServiceConfig()
    {
    	return array(
	    'factories' => array()
	);
    }
    public function getViewHelperConfig(){
       return array(
            'factories' => array(
                'Gender' => function($sm) {
                    //$locator = $sm->getServiceLocator(); 
                    return new \ZF2ar\View\Helper\Gender();
                },
            ),
        );
    }
}
