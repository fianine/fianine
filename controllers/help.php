<?php
  class Help extends FN_Controller{

    function __construct(){
      parent::__construct();
      echo 'Kita di help';
    }

    function about($arg = false){
      echo '<br>Kita di about';
      echo '<br>Optional ' . $arg;
      
      require 'models/HelpModel.php';
      $model = new HelpModel();
    }
  }
