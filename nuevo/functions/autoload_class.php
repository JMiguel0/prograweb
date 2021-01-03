<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . 'Curso-mi-blog-master/config/config.php';
spl_autoload_register(function ($class) {
  if(in_array($class, NORMAL_CLASS))
    return require $_SERVER['DOCUMENT_ROOT'] . "/Curso-mi-blog-master/class/$class/$class.class.php";
  elseif (strpos($class, 'Message') !== false)
    require $_SERVER['DOCUMENT_ROOT'] . "/Curso-mi-blog-master/class/Message/$class.class.php";
  else
    require $_SERVER['DOCUMENT_ROOT'] . "/Curso-mi-blog-master/class/Article/$class.class.php";
});

  

