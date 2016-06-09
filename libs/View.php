<?php
  class View {

    function __construct(){
      echo 'Kita di View<br>';
    }

    public function render($name) {
      require 'views/' .$name. '.php';
    }

  }
