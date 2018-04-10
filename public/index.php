<?php 
  require_once dirname(__DIR__) . '/config/init.php';
  require_once LIBS . '/functions.php';

  new \PHPmaster\App();
  //\PHPmaster\App::$app()->setProperty('test', "TEST");
  debug(\PHPmaster\App::$app->getProperties());