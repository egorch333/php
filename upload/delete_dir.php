<?php

/*
 * removeDirectory($dir)
 * удаление директории + удаление файлов в деректории
 * */
 
  function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
  }
  
  removeDirectory('../f1');
?>