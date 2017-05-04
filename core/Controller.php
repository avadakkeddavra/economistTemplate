<?php
namespace core;
use core\Model;
use core\View;

session_start();
class Controller{
  public $model;
  public $view;

  function __construct($controllerName){
    $this -> view = new View();
    $model = 'models\\' . $controllerName . 'Model';
    $this-> model = new $model();
  }
  function indexAction(){

  }
}

 ?>
