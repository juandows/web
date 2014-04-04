<?php


//Define autoloader 
function __autoload($className) { 
      $className = str_replace('\\', '/', $className);
      if (file_exists($className.'.php')) { 
          require_once $className.'.php'; 
          return true; 
      } 
      return false; 
} 

