<?php

// init twig
  require_once 'twigEx.php';

  $data['content'] = $twig->render('forms.twig');
  
  $twig->display('template.twig', $data );

?>