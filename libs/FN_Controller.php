<?php
  class FN_Controller {

    function __construct(){
      echo 'Main Controller<br>';
      $this->view = new View();
    }
    
  }
