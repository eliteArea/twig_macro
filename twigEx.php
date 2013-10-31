<?php 
/*
| twig system init
*/

  require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
  
  Twig_Autoloader::register();
  
  $loader = new Twig_Loader_Filesystem('templates/');
  
  $twig = new Twig_Environment($loader , array(
    //'cache' => 'cache',
    'debug' => true 
  ));
  
  $twig->addExtension(new Twig_Extension_Debug());
