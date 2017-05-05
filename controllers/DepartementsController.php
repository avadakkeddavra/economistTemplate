<?php 
namespace controllers;
use core\Controller;

class DepartementsController extends Controller
{
	public function indexAction()
	{
		$this->view->generate('departement', 'departement.html');
	}
}

 ?>