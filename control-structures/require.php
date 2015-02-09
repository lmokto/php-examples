<?php
  function TestFunc()
  {
    require('test2.php');
    echo "<pre>" . print_r($GLOBALS, true) . "</pre>";
  }
?>