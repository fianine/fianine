<?php
  class Nineerror extends FN_Controller {

    function __construct(){
      parent::__construct();
      echo 'Error >_<';

      $this->view->msg = 'This page doesnt exists';
      $this->view->render('error/index');
    }
  }
